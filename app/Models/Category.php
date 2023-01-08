<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function addCategory($data){

        return DB::table($this->table)->insert($data);
    }

    public function getAll(){
        $categories = DB::table($this->table)
        ->orderBy('id')
        ->get();

        return $categories;
    }
}
