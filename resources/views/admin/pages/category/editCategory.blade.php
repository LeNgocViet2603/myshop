@extends("admin.layout.master_layout")

@section("cssForPage")
<!-- Data Tables -->
<link href="{{ asset('backend/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
<link href="{{ asset('backend/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>
@endSection

@section("title")
    <title>Category</title>
@endSection



@section("content")
<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
    <h1>Update Category</h1>
    @if (session('msg'))
        <div class="alert alert-success text-center">{{session('msg')}}</div>
    @endif 
    @if ($errors->any())
        <div class="alert alert-danger">
            Please check your input !!!
        </div>
    @endif
    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
        <span><i class="mdi mdi-chevron-right"></i></span>Update Category</p>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ec-cat-list card card-default mb-24px">
            <div class="card-body">
                <div class="ec-cat-form">
                    <h4>Update Category</h4>

                    <form action="{{ route('admin.post-editCate') }}" method="POST">

                        <div class="form-group row">
                            <label for="text" class="col-12 col-form-label">Name</label> 
                            <div class="col-12">
                                <input id="text" name="name_category" placeholder="Name..." value="{{old('name_category' )?? $categoryDetail->category_name}}" class="form-control here slug-title" type="text">
                            </div>
                            @error('name_category')
                                <span style="color:red;display: block;margin-top: 10px;">{{$message}}</span>
                            @enderror
                        </div>

                        {{-- <div class="form-group row">
                            <label for="slug" class="col-12 col-form-label">Slug</label> 
                            <div class="col-12">
                                <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-form-label">Sort Description</label> 
                            <div class="col-12">
                                <textarea id="sortdescription" name="sortdescription" cols="40" rows="2" class="form-control"></textarea>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label class="col-12 col-form-label">Full Description</label> 
                            <div class="col-12">
                                <textarea id="fulldescription" name="fulldescription" cols="40" rows="4" class="form-control"></textarea>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label class="col-12 col-form-label">Product Tags <span>( Type and
                                    make comma to separate tags )</span></label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="group_tag" name="group_tag" value="" placeholder="" data-role="tagsinput">
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-12">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.mainCate') }}" class="btn btn-warning">Quay lai</a>
                            </div>
                        </div>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
   
</div>
@endSection

@section('customJs')
	<!-- Data Tables -->
	<script src="{{ asset('backend/plugins/data-tables/jquery.datatables.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/data-tables/datatables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/tags-input/bootstrap-tagsinput.js') }}"></script>
@endSection