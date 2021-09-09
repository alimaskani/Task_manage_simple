<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('/assets/js/jquery-3.6.0.min.js')}}">
    <link rel="stylesheet" href="{{asset('/assets/js/popper.min.js')}}">
    <link rel="stylesheet" href="{{asset('/assets/js/bootstrap.min.js')}}">

    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">


</head>
<body>
@include('sweetalert::alert')



@yield('content')


</body>
</html>
