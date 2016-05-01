<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/ui_kit/assets/images/logo.png') }}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{URL::asset('assets/ui_kit/assets/images/logo.png')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/animate.css/animate.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/glyphicons/glyphicons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/material-design-icons/material-design-icons.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/styles/app.css')}}" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="{{URL::asset('assets/ui_kit/assets/styles/font.css')}}" type="text/css" />
    @yield('styles')
</head>

<body class="">
<div class="body-wrap black">
        @include('partials.navigation')
        @yield('content')

</div>
@include('partials.footer')

<script src="{{URL::asset('assets/ui_kit/libs/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('assets/ui_kit/libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{URL::asset('assets/ui_kit/libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/libs/jquery/PACE/pace.min.js')}}"></script>

<script src="{{URL::asset('assets/ui_kit/html/scripts/config.lazyload.js')}}"></script>

<script src="{{URL::asset('assets/ui_kit/html/scripts/palette.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-load.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-jp.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-include.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-device.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-form.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-nav.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-screenfull.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-scroll-to.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ui-toggle-class.js')}}"></script>

<script src="{{URL::asset('assets/ui_kit/html/scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{URL::asset('assets/ui_kit/libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{URL::asset('assets/ui_kit/html/scripts/ajax.js')}}"></script>
@yield('scripts')
</body>
</html>