<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="favicon.ico" />
    <title>IndusValley</title>
    <style id="dynamic-css"></style>
    <style type="text/css">
        .preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            text-align: center;
            z-index: 6001;
        }

        .preloader:after {
            content: "";
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }

        .sk-cube-grid {
            width: 3.857rem;
            height: 3.857rem;
            margin: 0 auto;
            vertical-align: middle;
            display: inline-block;
        }

        .sk-cube-grid .sk-cube {
            width: 33%;
            height: 33%;
            background-color: #333;
            float: left;
            -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
            animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
        }

        .sk-cube-grid .sk-cube1 {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        .sk-cube-grid .sk-cube2 {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        .sk-cube-grid .sk-cube3 {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .sk-cube-grid .sk-cube4 {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
        }

        .sk-cube-grid .sk-cube5 {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        .sk-cube-grid .sk-cube6 {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        .sk-cube-grid .sk-cube7 {
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
        }

        .sk-cube-grid .sk-cube8 {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
        }

        .sk-cube-grid .sk-cube9 {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        @-webkit-keyframes sk-cubeGridScaleDelay {

            0%,
            70%,
            100% {
                -webkit-transform: scale3D(1, 1, 1);
                transform: scale3D(1, 1, 1);
            }

            35% {
                -webkit-transform: scale3D(0, 0, 1);
                transform: scale3D(0, 0, 1);
            }
        }

        @keyframes sk-cubeGridScaleDelay {

            0%,
            70%,
            100% {
                -webkit-transform: scale3D(1, 1, 1);
                transform: scale3D(1, 1, 1);
            }

            35% {
                -webkit-transform: scale3D(0, 0, 1);
                transform: scale3D(0, 0, 1);
            }
        }
    </style>
</head>

<body class="page-color-style-5 page-style-5">

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
        <div class="color-wrapper choose-animation">
            <h4 class="caption h4">Your animation:</h4>
            <div class="checkbox-entry-wrap">
                <label class="checkbox-entry type-2">
                    <input type="radio" name="1" value="animation" checked>
                    <span>
                        <i></i>
                        <p>With animation</p>
                    </span>
                </label>
            </div>
            <div class="empty-sm-15 empty-xs-15"></div>
            <div class="checkbox-entry-wrap">
                <label class="checkbox-entry type-2">
                    <input type="radio" name="1" value="classic">
                    <span>
                        <i></i>
                        <p>Classic</p>
                    </span>
                </label>
            </div>
        </div>
    </div>

    <!--market-->
    <a href="https://themeforest.net/" class="pulse-wr">
        <div class="popup-pulse">
            <span>$</span>18
        </div>
    </a>

    @include('layouts.header')
    <div class="main-content">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        {{ $slot }}
    </div>
    @include('layouts.footer')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/all.js') }} "></script>
    <script src="{{ asset('js/jscolor.min.js') }}"></script>
    <script src=" {{ asset('js/jquery.knob.js') }} "></script>
    <script src=" {{ asset('js/jquery.throttle.js') }} "></script>
    <script src=" {{ asset('js/jquery.classycountdown.js') }} "></script>
    <script src=" {{ asset('js/jarallax.js') }} "></script>
    <script src=" {{ asset('js/color.picker.js') }} "></script>

</body>

</html>