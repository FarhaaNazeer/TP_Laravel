<html>

<head>
    <title>IndusValley - @yield('title') </title>
    <link rel="shortcut icon" href="favicon.ico" />
    <style id="dynamic-css"></style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('header')
    @section('sidebar')
    This is the master sidebar

    @show


    @yield('content')

    @include('footer')
</body>
@section('javascript')
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

</html>