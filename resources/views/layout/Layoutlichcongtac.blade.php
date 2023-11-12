<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Tailwindcss -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <link rel="stylesheet" href="/css/3.0.24"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <!--  font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta property="og:type" content="website" />
    <meta property="og:title" content="LỊCH CÔNG TÁC" />
    <meta property="og:url" content="/">
    <meta http-equiv="refresh" content="900; url=http://lichcongtac.ivinh.com/">
</head>

<body style="background-color:#30A6A6">
    <div class="text-center text-4xl text-white font-medium pt-5 pb-5 "  style="   background-color: rgba(62, 102, 119, 0.3); ">
        LỊCH CÔNG TÁC
    </div>
    <div class="pl-5 pr-10">
    @yield('content')

    </div>
    <footer></footer>

    <script src="..thu vien"></script>
    <script src="/js/app.js"></script>

</body>

</html>