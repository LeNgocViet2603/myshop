<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function edit($id){
        $data = DB::table('product')->where('id_product',$id)->leftJoin('category', 'category.id', '=', 'product.category_id');
        $data = $data->get();
        //dd($data);
        return view('admin.pages.product.editProduct',compact('data'));
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('product')->select('*')->leftJoin('category', 'category.id', '=', 'product.category_id');
        //$data = DB::table('product')->select('*');
        $data = $data->get();
        //dd($data);
        return view('admin.pages.product.productList',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $gethinhthe = '';
        // if($request->hasFile('thumbnail')){
        //     //Hàm kiểm tra dữ liệu
        //     $this->validate($request, 
        //         [
        //             //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
        //             'thumbnail' => 'mimes:jpg,jpeg,png,gif|max:2048',
        //         ],			
        //         [
        //             //Tùy chỉnh hiển thị thông báo không thõa điều kiện
        //             'thumbnail.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
        //             'thumbnail.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
        //         ]
        //     );
            
        //     //Lưu hình ảnh vào thư mục public/upload/hinhthe
        //     $hinhthe = $request->file('thumbnail');
        //     $gethinhthe = time().'_'.$hinhthe->getClientOriginalName();
        //     $destinationPath = public_path('backend/img/');
        //     $hinhthe->move($destinationPath, $gethinhthe);
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $id_product = $request->input('id_product');
        $name = $request->input('title');
        $price = $request->input('price');
        $discount = $request->input('discount');
        $description = $request->input('description');
        $category_name = $request->input('category_name');
        $thumbnail = $request->input('thumbnail');

        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move('backend/img/', $request->file('thumbnail')->getClientOriginalName());
            $thumbnail = $request->file('thumbnail')->getClientOriginalName();
        }

        $data = array('id_product' => $id_product,'title'=>$name,'price'=>$price,'discount'=>$discount,'description'=>$description,'thumbnail'=>$thumbnail,'category_name'=>$category_name) ;
        DB::table('product')->where('id_product',$id_product)->leftJoin('category', 'category.id', '=', 'product.category_id')->update($data);
        return redirect()->route('admin.productList');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  DB::table('product')->where('id_product',$id);
        $data->delete();
        return redirect()->route('admin.productList');
    }
}
