@extends("admin.layout.master_layout")

@section("title")
<title>Add product</title>
@endSection

@section("content")
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Add Product</h1>
        <p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            Please check your input !!!
        </div>
    @endif
    <div>
        <a href="/admin/product/list-product" class="btn btn-primary"> View All </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Product</h2>
            </div>

            <div class="card-body">
                <div class="row ec-vendor-uploads">
                    <form class="row" action="" method="POST" enctype="multipart/form-data">
                   
                    <div class="col-lg-4">
                        <div class="ec-vendor-img-upload">
                            <div class="ec-vendor-main-img">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" class="ec-image-upload" name="thumbnail"
                                            accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"><img
                                                src="{{ asset('backend/img/icons/edit.svg') }}"
                                                class="svg_img header_svg" alt="edit" /></label>
                                    </div>
                                    <div class="avatar-preview ec-preview">
                                        <div class="imagePreview ec-div-preview">
                                            <img class="ec-image-preview"
                                                src="{{ asset('backend/img/products/vender-upload-preview.jpg') }}"
                                                alt="edit" />
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb-upload-set colo-md-12">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload01" class="ec-image-upload" name="thumbnail1"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload02" class="ec-image-upload" name="thumbnail2"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload03" class="ec-image-upload" name="thumbnail3"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload04"  class="ec-image-upload" name="thumbnail4"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload05" class="ec-image-upload" name="thumbnail5"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload06" class="ec-image-upload" name="thumbnail6"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="ec-vendor-upload-detail">
       
                                <div class="col-md-6" >
                                    <label for="inputEmail4" class="form-label">Product name</label>
                                    <input type="text" class="form-control slug-title " id="inputEmail4" placeholder="vidu: Iphone 7 plus..." name="name" value="{{old('name')}}">
                                    @error('name')
                                        <span style="color:red; ">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Select Categories</label>
                                    <select name="categories" id="Categories" class="form-control">
                                        <option value="0">Select Category</option>
                                            @if (!empty($allCategories))
                                                @foreach ($allCategories as $category)
                                                    <option value="{{$category->id}}"  {{old('category_id')==$category->id?'selected':false}} >{{$category->category_name}}</option>
                                                @endforeach
                                            @endif
                                    </select>
                                    @error('categories')
                                        <span style="color:red; ">{{$message}}</span>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-12">
                                    <label for="slug" class="col-12 col-form-label">Slug</label> 
                                    <div class="col-12">
                                        <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="2" name="description" placeholder="Description..." value="{{old('description')}}"></textarea>
                                    @error('description')
                                        <span style="color:red; ">{{$message}}</span>
                                    @enderror
                                </div>

                                {{-- <div class="col-md-4 mb-25">
                                    <label class="form-label">Colors</label>
                                    <input type="color" class="form-control form-control-color"
                                        id="exampleColorInput1" value="#ff6191"
                                        title="Choose your color">
                                    <input type="color" class="form-control form-control-color"
                                        id="exampleColorInput2" value="#33317d"
                                        title="Choose your color">
                                    <input type="color" class="form-control form-control-color"
                                        id="exampleColorInput3" value="#56d4b7"
                                        title="Choose your color">
                                    <input type="color" class="form-control form-control-color"
                                        id="exampleColorInput4" value="#009688"
                                        title="Choose your color">
                                </div>

                                <div class="col-md-8 mb-25">
                                    <label class="form-label">Size</label>
                                    <div class="form-checkbox-box">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="size1" value="size">
                                            <label>S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="size1" value="size">
                                            <label>M</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="size1" value="size">
                                            <label>L</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="size1" value="size">
                                            <label>XL</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="size1" value="size">
                                            <label>XXL</label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <label class="form-label">Price <span>(VND)</span></label>
                                    <input type="number" class="form-control" id="price1" name="price" placeholder="vidu: 7000000" value="{{old('price')}}">
                                    @error('price')
                                        <span style="color:red; ">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 " style="margin-bottom: 10px">
                                    <label class="form-label">Discount <span>(%)</span></label>
                                    <input type="number" class="form-control" id="price2" placeholder="vidu: 10 (10%)...." name="discount" value="{{old('discount')}}">
                                    @error('discount')
                                        <span style="color:red; ">{{$message}}</span>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-6">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control" id="quantity1">
                                </div> --}}
                                {{-- <div class="col-md-12">
                                    <label class="form-label">Ful Detail</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div> --}}
                                {{-- <div class="col-md-12">
                                    <label class="form-label">Product Tags <span>( Type and make comma to separate tags )</span></label>
                                    <input type="text" class="form-control" id="group_tag"
                                        name="group_tag" value="" placeholder=""
                                        data-role="tagsinput" />
                                </div> --}}
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endSection

@section("customJs")
<script src="{{ asset('backend/plugins/tags-input/bootstrap-tagsinput.js') }}"></script>
@endSection