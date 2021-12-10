@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<body class="page-color-style-6 page-style-6">

    <div class="preloader">
        <div class="sk-cube-grid selected">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <div class="color-piker">
        <div class="piker-open">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 478.703 478.703" style="enable-background:new 0 0 478.703 478.703;" xml:space="preserve" width="24px" height="24px">
                <g>
                    <g>
                        <path d="M454.2,189.101l-33.6-5.7c-3.5-11.3-8-22.2-13.5-32.6l19.8-27.7c8.4-11.8,7.1-27.9-3.2-38.1l-29.8-29.8
                        c-5.6-5.6-13-8.7-20.9-8.7c-6.2,0-12.1,1.9-17.1,5.5l-27.8,19.8c-10.8-5.7-22.1-10.4-33.8-13.9l-5.6-33.2
                        c-2.4-14.3-14.7-24.7-29.2-24.7h-42.1c-14.5,0-26.8,10.4-29.2,24.7l-5.8,34c-11.2,3.5-22.1,8.1-32.5,13.7l-27.5-19.8
                        c-5-3.6-11-5.5-17.2-5.5c-7.9,0-15.4,3.1-20.9,8.7l-29.9,29.8c-10.2,10.2-11.6,26.3-3.2,38.1l20,28.1
                        c-5.5,10.5-9.9,21.4-13.3,32.7l-33.2,5.6c-14.3,2.4-24.7,14.7-24.7,29.2v42.1c0,14.5,10.4,26.8,24.7,29.2l34,5.8
                        c3.5,11.2,8.1,22.1,13.7,32.5l-19.7,27.4c-8.4,11.8-7.1,27.9,3.2,38.1l29.8,29.8c5.6,5.6,13,8.7,20.9,8.7c6.2,0,12.1-1.9,17.1-5.5
                        l28.1-20c10.1,5.3,20.7,9.6,31.6,13l5.6,33.6c2.4,14.3,14.7,24.7,29.2,24.7h42.2c14.5,0,26.8-10.4,29.2-24.7l5.7-33.6
                        c11.3-3.5,22.2-8,32.6-13.5l27.7,19.8c5,3.6,11,5.5,17.2,5.5l0,0c7.9,0,15.3-3.1,20.9-8.7l29.8-29.8c10.2-10.2,11.6-26.3,3.2-38.1
                        l-19.8-27.8c5.5-10.5,10.1-21.4,13.5-32.6l33.6-5.6c14.3-2.4,24.7-14.7,24.7-29.2v-42.1
                        C478.9,203.801,468.5,191.501,454.2,189.101z M451.9,260.401c0,1.3-0.9,2.4-2.2,2.6l-42,7c-5.3,0.9-9.5,4.8-10.8,9.9
                        c-3.8,14.7-9.6,28.8-17.4,41.9c-2.7,4.6-2.5,10.3,0.6,14.7l24.7,34.8c0.7,1,0.6,2.5-0.3,3.4l-29.8,29.8c-0.7,0.7-1.4,0.8-1.9,0.8
                        c-0.6,0-1.1-0.2-1.5-0.5l-34.7-24.7c-4.3-3.1-10.1-3.3-14.7-0.6c-13.1,7.8-27.2,13.6-41.9,17.4c-5.2,1.3-9.1,5.6-9.9,10.8l-7.1,42
                        c-0.2,1.3-1.3,2.2-2.6,2.2h-42.1c-1.3,0-2.4-0.9-2.6-2.2l-7-42c-0.9-5.3-4.8-9.5-9.9-10.8c-14.3-3.7-28.1-9.4-41-16.8
                        c-2.1-1.2-4.5-1.8-6.8-1.8c-2.7,0-5.5,0.8-7.8,2.5l-35,24.9c-0.5,0.3-1,0.5-1.5,0.5c-0.4,0-1.2-0.1-1.9-0.8l-29.8-29.8
                        c-0.9-0.9-1-2.3-0.3-3.4l24.6-34.5c3.1-4.4,3.3-10.2,0.6-14.8c-7.8-13-13.8-27.1-17.6-41.8c-1.4-5.1-5.6-9-10.8-9.9l-42.3-7.2
                        c-1.3-0.2-2.2-1.3-2.2-2.6v-42.1c0-1.3,0.9-2.4,2.2-2.6l41.7-7c5.3-0.9,9.6-4.8,10.9-10c3.7-14.7,9.4-28.9,17.1-42
                        c2.7-4.6,2.4-10.3-0.7-14.6l-24.9-35c-0.7-1-0.6-2.5,0.3-3.4l29.8-29.8c0.7-0.7,1.4-0.8,1.9-0.8c0.6,0,1.1,0.2,1.5,0.5l34.5,24.6
                        c4.4,3.1,10.2,3.3,14.8,0.6c13-7.8,27.1-13.8,41.8-17.6c5.1-1.4,9-5.6,9.9-10.8l7.2-42.3c0.2-1.3,1.3-2.2,2.6-2.2h42.1
                        c1.3,0,2.4,0.9,2.6,2.2l7,41.7c0.9,5.3,4.8,9.6,10,10.9c15.1,3.8,29.5,9.7,42.9,17.6c4.6,2.7,10.3,2.5,14.7-0.6l34.5-24.8
                        c0.5-0.3,1-0.5,1.5-0.5c0.4,0,1.2,0.1,1.9,0.8l29.8,29.8c0.9,0.9,1,2.3,0.3,3.4l-24.7,34.7c-3.1,4.3-3.3,10.1-0.6,14.7
                        c7.8,13.1,13.6,27.2,17.4,41.9c1.3,5.2,5.6,9.1,10.8,9.9l42,7.1c1.3,0.2,2.2,1.3,2.2,2.6v42.1H451.9z" />
                        <path d="M239.4,136.001c-57,0-103.3,46.3-103.3,103.3s46.3,103.3,103.3,103.3s103.3-46.3,103.3-103.3S296.4,136.001,239.4,136.001
                        z M239.4,315.601c-42.1,0-76.3-34.2-76.3-76.3s34.2-76.3,76.3-76.3s76.3,34.2,76.3,76.3S281.5,315.601,239.4,315.601z" />
                    </g>
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
        </div>
        <div class="color-wrapper">
            <h4 class="caption h4">Choose your color theme:</h4>
            <input value="f1bc1b" class="jscolor" onchange="updateScheme(this.jscolor)" id="jscolorid" />
        </div>
    </div>

    <!--market-->
    <a href="https://themeforest.net/" class="pulse-wr">
        <div class="popup-pulse">
            <span>$</span>18
        </div>
    </a>

    <div class="main-content">

        <section class="section">
            <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
            <div class="empty-lg-50 empty-md-20 empty-sm-10 empty-xs-10"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                        <div class="simple-item color-type-2 text-center">
                            <div class="main-title">
                                <h1 class="h1 color-2">Checkout</h1>
                                <div class="empty-sm-25"></div>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="simple-text md opacity-1">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12">
                        <div class="empty-sm-60 empty-xs-30"></div>
                        <div class="text-left check-subtitle">
                            <h4 class="h4 sm color-2">Your Order</h4>
                        </div>
                        <div class="empty-sm-40 empty-xs-20"></div>
                        <table class="order-list" cols="4" cellspacing="0">
                            <tr>
                                <td>
                                    <div class="img hover-zoom">
                                        <div class="color-type-1">
                                            <a href="#" class="image-hover"><img src="img/checkout/order-1.png" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="h5 caption"><a href="#" class="link-hover">Mediterranean Shrimp Pizza</a></h5>
                                </td>
                                <td>
                                    <div class="shop-item">
                                        <h6 class="h6">2 items</h6>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="h5 sm order-price main-col">$16.80</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img hover-zoom">
                                        <div class="color-type-1">
                                            <a href="#" class="image-hover"><img src="img/checkout/order-2.png" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="h5 caption"><a href="#" class="link-hover">Big Coca-Cola 2L</a></h5>
                                </td>
                                <td>
                                    <div class="shop-item">
                                        <h6 class="h6">1 item</h6>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="h5 sm order-price main-col">$2.80</h5>
                                </td>
                            </tr>
                        </table>
                        <div class="empty-sm-30 empty-xs-15"></div>
                        <div class="promo-code">
                            <div class="input-field-wrap type-2">
                                <input type="text" class="input-field color-2" placeholder="Promo Code">
                            </div>
                            <a href="#" class="page-button md button-style-1 type-4 check"><span class="txt">check code</span></a>
                        </div>
                        <div class="empty-sm-30 empty-xs-15"></div>
                        <div class="cart-total">
                            <ul>
                                <li>
                                    <h5 class="tt h5 sm color-2 height-50">Cart Total<span><b class="main-col">$19.80</b></span></h5>
                                </li>
                                <li>
                                    <h5 class="tt h5 sm color-2 height-50">Delivery:<span><b class="main-col">free</b></span></h5>
                                </li>
                                <li>
                                    <h5 class="tt h5 sm color-2 height-50">Box for pizza:<span><b class="main-col">$1.60</b></span></h5>
                                </li>
                                <div class="empty-sm-15 empty-xs-15"></div>
                                <li>
                                    <h4 class="tt h4 color-2 height-50">Total:<span><b class="main-col">$21.60</b></span></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="empty-sm-60 empty-xs-30"></div>
                        <div class="text-left check-subtitle">
                            <h4 class="h4 sm color-2">Your Info</h4>
                        </div>
                        <div class="empty-sm-40 empty-xs-20"></div>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field color-2" placeholder="First Name *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field color-2" placeholder="Last Name">
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="Email *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="Phone *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="Country *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="ZIP Code *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="City *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="Street *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="House Number *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" placeholder="Flat Number *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="input-field-wrap">
                                <textarea placeholder="Message" class="input-field color-2"></textarea>
                                <div class="focus"></div>
                            </div>
                            <div class="empty-sm-50 empty-xs-50"></div>
                            <div class="checkbox-entry-wrap tt delivery">
                                <label class="checkbox-entry">
                                    <input type="checkbox">
                                    <span>
                                        <i></i>
                                        <p>Delivery to another address</p>
                                    </span>
                                </label>
                            </div>
                            <div class="delivery-form">
                                <div class="empty-sm-40 empty-xs-20"></div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="text" class="input-field color-2" placeholder="First Name *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="text" class="input-field color-2" placeholder="Last Name">
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="Email *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="Phone *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="Country *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="ZIP Code *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="City *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="Street *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="House Number *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-field-wrap">
                                                <input type="email" class="input-field color-2" placeholder="Flat Number *" required>
                                                <div class="focus"></div>
                                            </div>
                                            <div class="empty-sm-20 empty-xs-20"></div>
                                        </div>
                                    </div>
                                    <div class="input-field-wrap">
                                        <textarea placeholder="Message" class="input-field color-2"></textarea>
                                        <div class="focus"></div>
                                    </div>
                                </form>
                            </div>

                            <div class="empty-sm-50 empty-xs-50"></div>
                            <div class="fr button-full-width">
                                <a href="#" class="page-button button-style-1 type-2"><span class="txt">Back to order</span></a>
                                <a href="#" class="page-button button-style-1 type-4"><span class="txt">Go to payment</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
        </section>
    </div>

</body>
@endsection