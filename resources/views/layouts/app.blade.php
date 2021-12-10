<html>

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>IndusValley - @yield('title') </title>
    <link rel="shortcut icon" href="favicon.ico" />
    <style id="dynamic-css"></style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>




@include('header')
@yield('content')
@include('footer')

<script>
    function MessageForm6() {
        $.ajax({
            type: 'POST',
            url: 'messageForm6.php',
            data: $('#messageForm6').serialize(),
            success: function(response) {
                $('.submit').html('send');
                $('#messageForm6')[0].reset();
            }
        });
        return false;
    }
</script>

</html>
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