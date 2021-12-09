@extends('layouts.app')

@section('title', 'Shop')

@section('content')
<div class="main-content">
    <section class="full-height-slider type-1">
        <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: asset('img/shop/main-naner-bg.jpg') " data-swiper-parallax="50%"></div>
        <div class="table-view mobile-rel-block">
            <div class="table-cell">
                <div class="container no-padd">
                    <div class="row vertical-wrap">
                        <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                            <div class="simple-item color-type-1 text-center">
                                <div class="main-title">
                                    <h1 class="h1 caption">Our Shop</h1>
                                    <div class="empty-sm-30"></div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="simple-text md">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="empty-lg-120 empty-md-100 empty-sm-60 empty-xs-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="shop-filter">
                        <div class="found-items">
                            <div class="simple-text">
                                <p>Found <span class="main-col"><b>27</b></span> items</p>
                            </div>
                        </div>
                        <div class="shop-select">
                            <div class="show-item">
                                <div class="title-select">
                                    <div class="simple-text">
                                        <p>Shown items per page</p>
                                    </div>
                                </div>
                                <select class="input-field type-2 main-col">
                                    <option value="val1">10</option>
                                    <option value="val1">40</option>
                                    <option value="val1">25</option>
                                    <option value="val1">38</option>
                                </select>
                            </div>
                            <div class="sort-by">
                                <div class="title-select">
                                    <div class="simple-text">
                                        <p>Sort by</p>
                                    </div>
                                </div>
                                <select class="input-field type-2 main-col">
                                    <option value="val1">popular</option>
                                    <option value="val1">popular-1</option>
                                    <option value="val1">popular-2</option>
                                    <option value="val1">popular-3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-3-columns type-1 row-2-columns">
                @foreach($products as $product)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="empty-sm-60 empty-xs-50"></div>
                    <div class="menu-item menu-item-6 type-3">
                        <div class="image">
                            <a href="#" class="like-product main-fill-col">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                    <g>
                                        <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                </svg>
                            </a>
                            <img src="{!! asset('front/img/shop/product-1.png') !!}" alt="">
                            <div class="vertical-align full menu-button">
                                <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                                <div class="empty-sm-10 empty-xs-10"></div>
                                <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h5 class="h5 caption">
                                <a href="{!! route('product', ['id' => $product->id ]) !!}" class="link-hover-line">{{ $product->name }}</a>
                            </h5>
                            <div class="empty-sm-5 empty-xs-5"></div>
                            <div class="simple-text">
                                <p><b>Ingredients: </b>Pepperoni, mushrooms, sausage, pizza sauce, and mozzarella cheese.</p>
                            </div>
                            <div class="simple-text">
                                <p><b>Weight: </b>450g</p>
                            </div>
                            <div class="menu-price style-2 title main-col">${{ $product->price }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="empty-lg-80 empty-md-50 empty-sm-40 empty-xs-30"></div>
    </section>

</div>
<ul>
    @foreach($products as $product)
    <a href="{!! route('product', ['id' => $product->id ]) !!}">
        <li>{{ $product->name }}</li>
    </a>
    @endforeach
</ul>
@endsection