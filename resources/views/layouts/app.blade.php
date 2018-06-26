<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('backend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/scss/style.css') }}">
    <link href="{{ asset('backend/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
          @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/jquery-2.1.4.min.js') }}"></script>
    
</body>
</html>
