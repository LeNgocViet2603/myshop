<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public function __construct(){
        $this->category = new Category();
    }

    public function addCategory(){

        return view('admin.pages.category.mainCategory');
    }

    public function postAddCategory(CategoryRequest $request){

        $dataInsert = [
            'category_name' => $request->name_category,
        ];

        // dd($request);

        $this->category->addCategory($dataInsert);     


    }
}
