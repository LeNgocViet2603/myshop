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
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
    </div>
    <div>
        <a href="/product/add" class="btn btn-primary"> Add Porduct</a>
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
                                <th>id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Description</th>
                     
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td><img class="tbl-thumb" src="{{ asset('backend/img/'.$row->thumbnail) }}" alt="Product Image" /></td>
                                    <td>{{$row->id_product}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td>{{$row->price}}</td>
                                    <td>{{$row->discount}} %</td>
                                    <td>{{$row->description}}</td>
                                    <td>
                                        <div class="btn-group mb-1">
                                            <button type="button"
                                                class="btn btn-outline-success">Info</button>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static">
                                                <span class="sr-only">Info</span>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('admin.product.edit',$row->id_product) }}">Edit</a>
                                                <a class="dropdown-item" href="/delete/{{$data[0]->id_product}}">Delete</a>
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