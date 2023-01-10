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

        $allCategories = $this->category->getAllCategory();

        return view('admin.pages.category.mainCategory', compact('allCategories'));
    }

    public function postAddCategory(CategoryRequest $request){

        $dataInsert = [
            'category_name' => $request->name_category,
        ];

        // dd($request);

        $this->category->addCategory($dataInsert);     

        return back()->with('msg', 'successfully added category !!!');
    }

    public function getEdit($id=0, Request $request){

        if(!empty($id)){
            $categoryDetail = $this->category->getDetail($id);
            if(!empty($categoryDetail[0])){
                $request->session()->put('id', $id);
                $categoryDetail = $categoryDetail[0];
            }else{
                return redirect()->route('admin.mainCate')->with('msg', 'Category does not exist !!!');
            }
        }else{
            return redirect()->route('admin.mainCate')->with('msg', 'Link does not exist !!!');
        }

        return view('admin.pages.category.editCategory', compact('categoryDetail'));
    }

    public function postEdit(CategoryRequest $request){
        
        $id =  session('id');
        if(empty($id)){
            return back()->with('msg', 'Link does not exist !!!');
        }

        $dataUpdate = [
            'category_name' => $request->name_category,
        ];
        $this->category->updateCategory($dataUpdate, $id);

        return back()->with('msg', 'Category update successful !!!');
    }

    public function delete($id){
        if(!empty($id)){
            $categoryDetail = $this->category->getDetail($id);
            if(!empty($categoryDetail[0])){
                $deleteStatus = $this->category->deleteCategory($id);
                if($deleteStatus){
                    $msg = 'Category delate successful !!!';
                }else{
                    $msg = 'You cannot delete the category. Please try again';
            }
            }else{
                $msg = 'Category does not exist !!!';
            }
        }else{
            $msg = 'Link does not exist !!!';
        }
        return redirect()->route('admin.mainCate')->with('msg', $msg);
    }
}
