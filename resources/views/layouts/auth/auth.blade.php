<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth_vendor/bootstrap/css/bootstrap.min.css')}}">

    {{--    Fonts--}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.css')}}">
{{--    <link href="https://fonts.cdnfonts.com/css/fontawesome" rel="stylesheet">--}}

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth_vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth_vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth_vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/auth.util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/auth.main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css')}}">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            @yield('content')
        </div>
    </div>


    <!-- Scripts -->
    <!--===============================================================================================-->
    <script src="{{asset('frontend/auth_vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('frontend/auth_vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('frontend/auth_vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('frontend/auth_vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('frontend/auth_vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('frontend/js/auth.main.js')}}"></script>

</body>
</html>
