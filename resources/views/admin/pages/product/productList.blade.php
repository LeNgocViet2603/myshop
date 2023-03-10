@extends("admin.layout.master_layout")


@section("cssForPage")
<!-- Data Tables -->
<link href="{{ asset('backend/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
<link href="{{ asset('backend/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>
@endSection


@section("title")
<title>Product list</title>
@endSection

@section("content")
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Product</h1>
        <p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
    </div>
    @if (session('msg'))
        <div class="alert alert-success text-center">{{session('msg')}}</div>
    @endif 
    <div>
        <a href=" {{ route('admin.addProduct') }}" class="btn btn-primary"> Add Product</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="responsive-data-table" class="table"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    {{-- <td><img class="tbl-thumb" src="../storage/app/public/images/{{$product->thumbnail}} " alt="Product Image" /></td> --}}
                                    <td><img class="tbl-thumb" src="{{ asset('backend/img/'.$product->thumbnail) }}" alt="Product Image" /></td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discount}} %</td>
                                    <td>{{$product->description}}</td>
                                    <td>
                                        <div class="btn-group mb-1">
                                            <a href=" {{ route('admin.productDetail', ['id'=>$product->id_product]) }} " type="button"
                                                class="btn btn-outline-success">Info</a>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static">
                                                <span class="sr-only">Info</span>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('admin.product.edit',$product->id_product) }}">Edit</a>
                                                <a class="dropdown-item" href="/admin/product/delete/{{$product->id_product}}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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