@extends("admin.layout.master_layout")
@section('cssForPage')
    <!-- Data Tables -->
	<link href="{{ asset('backend/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
	<link href="{{ asset('backend/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>
@endSection
@section('title')
    <title>User list</title>
@endSection

@section('content')
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>User List</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>User
            </p>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#addUser"> Add User
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Total Buy</th>
                                    <th>Status</th>
                                    <th>Join On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($listUser as $item)
                                    <tr>
                                        <td><img class="vendor-thumb" src="{{ asset('backend/img/vendor/u1.jpg') }}" alt="user profile" /></td>

                                            <td>{{ $item['user_name']; }}</td>
                                            <td>{{ $item['email']; }}</td>
                                            <td>{{ $item['number_phone']; }}</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td>{{ $item['created_at']; }}</td>
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
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
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
    <div class="modal fade modal-add-contact" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                    </div>

                    <div class="modal-body px-4">
                        <div class="form-group row mb-6">
                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                Image</label>

                            <div class="col-sm-8 col-lg-10">
                                <div class="custom-file mb-1">
                                    <input type="file" class="custom-file-input" id="coverImage"
                                        required>
                                    <label class="custom-file-label" for="coverImage">Choose
                                        file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" value="John">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" value="Deo">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="userName">User name</label>
                                    <input type="text" class="form-control" id="userName"
                                        value="johndoe">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        value="johnexample@gmail.com">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="Birthday">Birthday</label>
                                    <input type="text" class="form-control" id="Birthday"
                                        value="10-12-1991">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="event">Address</label>
                                    <input type="text" class="form-control" id="event"
                                        value="Address here">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer px-4">
                        <button type="button" class="btn btn-secondary btn-pill"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
                    </div>
                </form>
            </div>
        </div>
	</div>
@endSection

@section('customJs')
	<!-- Data Tables -->
	<script src="{{ asset('backend/plugins/data-tables/jquery.datatables.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/data-tables/datatables.responsive.min.js') }}"></script>
@endSection