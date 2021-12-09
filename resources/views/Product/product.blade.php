@extends('layouts.app')

@section('title', $product->name)

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
        <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-xs-12">
                    <img src="{!! asset('front/img/product-detail/product-detail-1-bg.png') !!} " alt="" class="full-img">
                </div>
                <div class="col-lg-6 col-md-7 col-xs-12">
                    <div class="empty-sm-0 empty-xs-30"></div>
                    <aside>
                        <div class="empty-sm-20 empty-xs-20"></div>
                        <h4 class="h4 sm tt color-2">{{ $product->name }}</h4>
                        <div class="empty-sm-20 empty-xs-20"></div>
                        <h5 class="h5 sm color-2">Price: <span class="h4 main-col"><b>${{ $product->price }}</b></span></h5>
                    </aside>
                    <div class="empty-sm-20 empty-xs-20"></div>
                    <aside class="product-size">
                        <h5 class="h5 sm color-2 inline-box">Size:</h5>
                        <div class="checkbox-entry-wrap">
                            <label class="checkbox-entry">
                                <input type="radio" name="1" checked="">
                                <span>
                                    <i></i>
                                    <p>25cm <span>(250g)</span></p>
                                </span>
                            </label>
                        </div>
                        <div class="checkbox-entry-wrap">
                            <label class="checkbox-entry">
                                <input type="radio" name="1">
                                <span>
                                    <i></i>
                                    <p>30cm <span>(450g)</span></p>
                                </span>
                            </label>
                        </div>
                        <div class="checkbox-entry-wrap">
                            <label class="checkbox-entry">
                                <input type="radio" name="1">
                                <span>
                                    <i></i>
                                    <p>40cm <span>(550g)</span></p>
                                </span>
                            </label>
                        </div>
                    </aside>
                    <div class="empty-sm-25 empty-xs-20"></div>
                    <aside>
                        <div class="simple-text">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null eiusmod tempor incididunt ut labore tore veritatis </p>
                        </div>
                    </aside>
                    <div class="empty-sm-30 empty-xs-20"></div>
                    <!-- <aside>
                        <h5 class="tt h5 sm color-2">Choose Ingredients:</h5>
                        <div class="empty-sm-25 empty-xs-15"></div>
                        <div class="arrow-closest item-padd-30">
                            <div class="swiper-container checkbox-wrapp" data-mode="horizontal" data-effect="slide" data-add-slides="4" data-slides-per-view="responsive" data-lg-slides="4" data-md-slides="4" data-xs-slides="2" data-sm-slides="4" data-loop="0" data-speed="800" data-space="13">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="checkbox-entry-wrap type-1">
                                            <label class="checkbox-entry">
                                                <input type="checkbox" checked="">
                                                <div class="content-check">
                                                    <img src="img/product-detail/choose-1.jpg" alt="" class="full-img">
                                                    <div class="empty-sm-10 empty-xs-10"></div>
                                                    <div class="simple-text">
                                                        <p><b>Peperoni</b></p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="checkbox-entry-wrap type-1">
                                            <label class="checkbox-entry">
                                                <input type="checkbox" checked="">
                                                <div class="content-check">
                                                    <img src="img/product-detail/choose-2.jpg" alt="" class="full-img">
                                                    <div class="empty-sm-10 empty-xs-10"></div>
                                                    <div class="simple-text">
                                                        <p><b>Ham</b></p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="checkbox-entry-wrap type-1">
                                            <label class="checkbox-entry">
                                                <input type="checkbox">
                                                <div class="content-check">
                                                    <img src="img/product-detail/choose-3.jpg" alt="" class="full-img">
                                                    <div class="empty-sm-10 empty-xs-10"></div>
                                                    <div class="simple-text">
                                                        <p><b>Mashrooms</b></p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="checkbox-entry-wrap type-1">
                                            <label class="checkbox-entry">
                                                <input type="checkbox">
                                                <div class="content-check">
                                                    <img src="img/product-detail/choose-4.jpg" alt="" class="full-img">
                                                    <div class="empty-sm-10 empty-xs-10"></div>
                                                    <div class="simple-text">
                                                        <p><b>Ruccola</b></p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-arrow-left swiper-arrow type-3 style-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px" height="19px">
                                    <g>
                                        <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" fill="#FFFFFF" />
                                    </g>
                                </svg>
                            </div>
                            <div class="swiper-arrow-right swiper-arrow type-3 style-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px" height="19px">
                                    <g>
                                        <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" fill="#FFFFFF" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </aside> -->
                    <div class="empty-sm-40 empty-xs-25"></div>
                    <aside>
                        <div class="buy-bar type-2">
                            <div class="fl">
                                <h5 class="h5 sm follow-title quntity">Quantity:</h5>
                                <div class="custom-input-number type-2">
                                    <button type="button" class="cin-btn cin-decrement">
                                        <img src="img/left_arr.png" alt="">
                                    </button>
                                    <input type="number" class="cin-input input-field" step="1" value="1" min="0" max="1000">
                                    <button type="button" class="cin-btn cin-increment">
                                        <img src="img/right_arr.png" alt="">
                                    </button>
                                </div>
                                <div class="empty-sm-0 empty-xs-15"></div>
                            </div>
                            <div class="fr">
                                <a href="#" class="page-button button-style-1 type-2"><span class="txt">Add to cart</span></a>
                                <a href="#" class="page-button button-style-1 type-4"><span class="txt">MY favourite</span></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="empty-lg-120 empty-md-90 empty-sm-60 empty-xs-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="simple-item color-type-2 text-center">
                        <h2 class="h2">You May Also Like</h2>
                        <div class="empty-sm-10 empty-xs-10"></div>
                        <div class="col-md-6 col-md-offset-3 col-xs-12">
                            <div class="simple-text md opacity-1">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
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
                            <img src="img/shop/product-7.png" alt="">
                            <div class="vertical-align full menu-button">
                                <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                                <div class="empty-sm-10 empty-xs-10"></div>
                                <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Shrimp Pizza</a></h5>
                            <div class="empty-sm-5 empty-xs-5"></div>
                            <div class="simple-text">
                                <p><b>Ingredients: </b>Pepperoni, mushrooms, sausage, pizza sauce, and mozzarella cheese.</p>
                            </div>
                            <div class="simple-text">
                                <p><b>Weight: </b>450g</p>
                            </div>
                            <div class="menu-price style-2 title main-col">$8.40</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
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
                            <img src="img/shop/product-8.png" alt="">
                            <div class="vertical-align full menu-button">
                                <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                                <div class="empty-sm-10 empty-xs-10"></div>
                                <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza Margherita</a></h5>
                            <div class="empty-sm-5 empty-xs-5"></div>
                            <div class="simple-text">
                                <p><b>Ingredients: </b>Mozzarella, 1/2 cup tomato sauce, drizzle with a few drops olive oil, basil and bake.</p>
                            </div>
                            <div class="simple-text">
                                <p><b>Weight: </b>450g</p>
                            </div>
                            <div class="menu-price style-2 title main-col">$9.20</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
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
                            <img src="img/shop/product-9.png" alt="">
                            <div class="vertical-align full menu-button">
                                <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                                <div class="empty-sm-10 empty-xs-10"></div>
                                <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza al Prosciutto</a></h5>
                            <div class="empty-sm-5 empty-xs-5"></div>
                            <div class="simple-text">
                                <p><b>Ingredients: </b>2-3 ounces finely sliced cooked ham, shredded, 1/2 cup tomato sauce , and 1/4 pound </p>
                            </div>
                            <div class="simple-text">
                                <p><b>Weight: </b>450g</p>
                            </div>
                            <div class="menu-price style-2 title main-col">$7.35</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
    </section>
</div>
@endsection

<h1>{{ $product->name }}</h1>

<h3>Details</h3>

<ul>
    <li>Price : {{ $product->price }}</li>
</ul>