@extends("admin.layout.master_layout")

@section("cssForPage")
<!-- Data Tables -->
<link href="{{ asset('backend/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/plugins/slick/slick.min.css') }}" rel='stylesheet'>
<link href="{{ asset('backend/plugins/swiper/swiper-bundle.min.css') }}" rel='stylesheet'>
@endSection

@section("title")
<title>Chi tiết sản phẩm</title>
@endSection

@section("content")
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Product Detail</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Product
        </p>
    </div>
    <div>
        <a href="#" class="btn btn-primary"> Edit
        </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Product Detail</h2>
            </div>

            <div class="card-body product-detail">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="single-pro-img">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive"
                                                src="{{ asset('images/'.$productDetail->thumbnail) }}" alt="">
                                        </div>
                                        {{-- <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_2.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_3.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_4.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_5.jpg') }}" alt="">
                                        </div> --}}
                                    </div>
                                    {{-- <div class="single-nav-thumb">
                                        <div class="single-slide">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_1.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_2.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_3.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_4.jpg') }}" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive"
                                                src="{{ asset('backend/img/products/pd_5.jpg') }}" alt="">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6">
                        <div class="row product-overview">
                            <div class="col-12">
                                <h5 class="product-title">{{ $productDetail->title }}</h5>
                                {{-- <p class="product-rate">
                                    <i class="mdi mdi-star is-rated"></i>
                                    <i class="mdi mdi-star is-rated"></i>
                                    <i class="mdi mdi-star is-rated"></i>
                                    <i class="mdi mdi-star is-rated"></i>
                                    <i class="mdi mdi-star"></i>
                                </p> --}}
                                <p class="product-desc">{{ $productDetail->description }}</p>
                                {{-- <p class="product-desc">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1990. Lorem Ipsum
                                    is simply dummy text of the printing and typesetting industry.
                                </p> --}}
                                {{-- <div class="ec-ofr">
                                    <h6>Available offers</h6>
                                    <ul>
                                        <li><b>Special Price :</b> Get extra 16% off (price
                                            inclusive of discount) <a href="#">T&C</a> </li>
                                        <li><b>Bank Offer :</b> 10% off on XYZ Bank Cards, up to
                                            $12. On orders of $200 and above <a href="#">T&C</a>
                                        </li>
                                        <li><b>Bank Offer :</b> 5% Unlimited Cashback on Ekka XYZ
                                            Bank Credit Card <a href="#">T&C</a></li>
                                        <li><b>Bank Offer :</b> Flat $50 off on first Ekka Pay Later
                                            order of $200 and above <a href="#">T&C</a></li>
                                    </ul>
                                </div> --}}
                                <p class="product-price">Price: {{ $productDetail->price }} <span>(VND)</span></p>
                                <p class="product-discount">Discount: {{ $productDetail->discount }} <span>(%)</span></p>
                                {{-- <p class="product-sku">SKU#: WH12</p> --}}
                                <ul class="product-size">
                                    <p>Size :</p>
                                    <li class="size"><span>S</span></li>
                                    <li class="size"><span>M</span></li>
                                    <li class="size"><span>L</span></li>
                                    <li class="size"><span>XL</span></li>
                                </ul>
                                <ul class="product-color">
                                    <p>Color :</p>
                                    <li class="color"><span
                                            style="background-color:#90cdf7;"></span></li>
                                    <li class="color"><span
                                            style="background-color:#ff3b66;"></span></li>
                                    <li class="color"><span
                                            style="background-color:#ffc476;"></span></li>
                                    <li class="color"><span
                                            style="background-color:#1af0ba;"></span></li>
                                    <li class="color"><span
                                            style="background-color:#f887d6;"></span></li>
                                </ul>

                                <p class="product-time">Time-created: {{ $productDetail->created_at }}</p>

                                {{-- <div class="product-stock">
                                    <div class="stock">
                                        <p class="title">Available</p>
                                        <p class="text">180</p>
                                    </div>
                                    <div class="stock">
                                        <p class="title">Pending</p>
                                        <p class="text">50</p>
                                    </div>
                                    <div class="stock">
                                        <p class="title">InOrder</p>
                                        <p class="text">20</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-12 u-card">
                        <div class="card card-default seller-card">
                            <div class="card-body text-center">
                                <a href="javascript:0" class="text-secondary d-inline-block">
                                    <div class="image mb-3">
                                        <img src="{{ asset('backend/img/user/u-xl-4.jpg') }}"
                                            class="img-fluid rounded-circle" alt="Avatar Image">
                                    </div>

                                    <h5 class="text-dark">John Karter</h5>
                                    <p class="product-rate">
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star"></i>
                                    </p>

                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-1">
                                            <i class="mdi mdi-map mr-1"></i>
                                            <span>321/2, rio street, usa.</span>
                                        </li>
                                        <li class="d-flex mb-1">
                                            <i class="mdi mdi-email mr-1"></i>
                                            <span>example@email.com</span>
                                        </li>
                                        <li class="d-flex">
                                            <i class="mdi mdi-whatsapp mr-1"></i>
                                            <span>+00 987-654-3210</span>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="row review-rating mt-4">
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myRatingTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"
                                    id="product-detail-tab" data-bs-toggle="tab"
                                    data-bs-target="#productdetail" href="#productdetail" role="tab"
                                    aria-selected="true">
                                    <i class="mdi mdi-library-books mr-1"></i> Detail</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"
                                    id="product-information-tab" data-bs-toggle="tab"
                                    data-bs-target="#productinformation" href="#productinformation"
                                    role="tab" aria-selected="false">
                                    <i class="mdi mdi-information mr-1"></i>Info</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"
                                    id="product-reviews-tab" data-bs-toggle="tab"
                                    data-bs-target="#productreviews" href="#productreviews"
                                    role="tab" aria-selected="false">
                                    <i class="mdi mdi-star-half mr-1"></i> Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane pt-3 fade show active" id="productdetail"
                                role="tabpanel">
                                <p>{{ $productDetail->description }}
                                </p>
                                <ul class="features">
                                    <li>{{ $productDetail->created_at }}</li>
                                
                                </ul>
                            </div>

                            <div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
                                <ul>
                                    <li><span>Weight</span> 1000 g</li>
                                    <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                    <li><span>Color</span> Black, Pink, Red, White</li>
                                </ul>
                            </div>

                            <div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
                                <div class="ec-t-review-wrapper">
                                    <div class="ec-t-review-item">
                                        <div class="ec-t-review-avtar">
                                            <img src="{{ asset('backend/img/review-image/1.jpg') }}" alt="">
                                        </div>
                                        <div class="ec-t-review-content">
                                            <div class="ec-t-review-top">
                                                <p class="ec-t-review-name">Jeny Doe</p>
                                                <div class="ec-t-rate">
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="ec-t-review-bottom">
                                                <p>Lorem Ipsum is simply dummy text of the printing
                                                    and
                                                    typesetting industry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-t-review-item">
                                        <div class="ec-t-review-avtar">
                                            <img src="{{ asset('backend/img/review-image/2.jpg') }}" alt="">
                                        </div>
                                        <div class="ec-t-review-content">
                                            <div class="ec-t-review-top">
                                                <p class="ec-t-review-name">Linda Morgus</p>
                                                <div class="ec-t-rate">
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star is-rated"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="ec-t-review-bottom">
                                                <p>Lorem Ipsum is simply dummy text of the printing
                                                    and
                                                    typesetting industry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection

@section('customJs')
<script src="{{ asset('backend/plugins/swiper/swiper-bundle.min.js') }}"></script>
@endSection