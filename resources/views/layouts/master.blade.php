<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css"
          href="/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css"
          href="/plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/plugins/revolution-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/plugins/revolution-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/plugins/revolution-slider/revolution/css/navigation.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body id="body">
@include('layouts.navbar');
<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{session()->get('warning')}}</p>
        @endif
        @yield('content')
    </div>
</div>
<!--Footer-->
@include('layouts.footer');
<script>

</script>
<!-- 3D jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Main jQuery -->
<script src="/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<!-- Instagram Feed Js -->
<script src="/plugins/instafeed-js/instafeed.min.js"></script>
<!-- Video Lightbox Plugin -->
<script src="/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="/plugins/SyoTimer/build/jquery.syotimer.min.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
        src="/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="/plugins/revolution-slider/assets/warning.js"></script>


<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="/plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="/js/script.js"></script>
</body>
</html>

