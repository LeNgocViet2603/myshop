@extends("admin.layout.master_layout")

@section("title")
<title>Add product</title>
@endSection

@section("content")
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Update Product</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
        <span><i class="mdi mdi-chevron-right"></i></span><a href="index.html">Product List</a>
        <span><i class="mdi mdi-chevron-right"></i></span>Edit</p>
    </div>
    <div>
        <a href="/product/list-product" class="btn btn-primary"> View All
        </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Update Product</h2>
            </div>

            <div class="card-body">
                <form  class="row g-3" action="/updatedata/{{$data[0]->id_product}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row ec-vendor-uploads">
                        <div class="col-lg-4">
                            <div class="ec-vendor-img-upload">
                                @foreach($data as $row)
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" class="ec-image-upload"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('backend/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset('backend/img/'.$row->thumbnail) }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ec-vendor-upload-detail">
                                <form  class="row g-3" action="/updatedata/{{$data[0]->id_product}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">ID</label> 
                                        <div class="col-12">
                                            <input type="text" name="id_product" value="{{$data[0]->id_product}}" class="form-control slug" id="id_product">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">Product name</label> 
                                        <div class="col-12">
                                            <input id="slug" name="title" value="{{$data[0]->title}}" class="form-control here set-slug" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Select Categories</label>
                                        <select name="category_name" id="Categories" class="form-select">
                                            <option selected>{{$data[0]->category_name}}</option>
                                            <option value="Iphone">Iphone</option>
                                            <option value="Sam Sung">Sam Sung</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Sony">Sony</option>
                                            <option value="Google">Google</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">Image</label> 
                                        <div class="col-12">
                                            <input id="slug"  name="thumbnail" value="{{$data[0]->thumbnail}}" class="form-control here set-slug" type="file">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">Price</label> 
                                        <div class="col-12">
                                            <input id="slug"  name="price" value="{{$data[0]->price}}" class="form-control here set-slug" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">Discount</label> 
                                        <div class="col-12">
                                            <input id="slug" name="discount" value="{{$data[0]->discount}}" class="form-control here set-slug" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Sort Description</label>
                                        <textarea name="description" class="form-control" rows="2">{{$data[0]->description}}</textarea>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endSection

@section("customJs")
<script src="{{ asset('backend/plugins/tags-input/bootstrap-tagsinput.js') }}"></script>
@endSection