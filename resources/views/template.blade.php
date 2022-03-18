<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="apply to best, apply, digital, agency, web development, app design, video production, website design, web agency, 3d motion, digital creative agency, design, technology, building, medical">
    <meta name="author" content="Mert Mustehlik">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images')}}/{{$settings->favicon}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-face.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?{{rand(10,9999)}}">
    @yield('css')
</head>

<body>
    <!-- Loader -->
    <div class="page-loader">
        <div class="loader-logo">
            <img src="{{asset('assets/images/apply-logo-loader.png')}}" alt="loader-apply-logo">
        </div>
    </div>
    <!-- Loader End -->

    <!-- include and master -->
    @include('data.header')
    @include('data.menu')

    @yield('master')

    @include('data.footer')
    <!-- include and master end -->

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <!-- Script End-->
    @yield('js')

</body>

</html>