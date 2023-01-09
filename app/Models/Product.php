<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public function getAllProducts(){
        $products = DB::table($this->table)
        ->select('product.*', 'category.category_name')
        ->join('category', 'product.category_id', '=', 'category.id')
        ->get();

        return $products;
    }
    

    public function addProduct($data){

        return DB::table($this->table)->insert($data);
    }

}
