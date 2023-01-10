<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $product;
    private $categories;

    public function __construct(){
        $this->product = new Product();
        $this->categories = new Category();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table($this->product)->select('*');
        // $data = $data->get();
        //dd($data);

        $products =  $this->product->getAllProducts();

        return view('admin.pages.product.productList',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategories = $this->categories->getAllCategory();

        return view('admin.pages.product.addProduct', compact('allCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $nameImg = $request->file('thumbnail')->getClientOriginalName();
        
        $dataInsert = [
            'title' => $request->name,
            'category_id' => $request->categories,
            'price' => $request->price,
            'discount' => $request->discount,
            'thumbnail' => $nameImg,
            'description' => $request->description,
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        // dd($request->file('thumbnail')->getClientOriginalName());
        
        $request->file('thumbnail')->storeAs('public/images', $nameImg);

        $request->file('thumbnail')->move(public_path('/images'), $nameImg);
        // Storage::move('E:/HK122-2022/TTCM-CNM-Web-Laravel/myshop/storage/app/public/images/', $nameImg, public_path('backend/img/proucts/', $nameImg));

        // File::move($from, $to);

        $this->product->addProduct($dataInsert);

        return redirect()->route('admin.productList')->with('msg', 'successfully added product !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

        if(!empty($id)){
            $productDetail = $this->product->getDetailProduct($id);
            if(!empty($productDetail[0])){
                $request->session()->put('id', $id);
                $productDetail = $productDetail[0];
            }else{
                return redirect()->route('admin.productList');
            }
        }else{
            return redirect()->route('admin.productList');
        }

        // dd($productDetail);

        return view('admin.pages.product.productDetail', compact('productDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
