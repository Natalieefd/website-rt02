<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo-desa-tanah-datar.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
    <script src="{{ asset('tailwindcharts/js/flowbite.min.js') }}"></script>
    <script src="{{ asset('tailwindcharts/js/apexcharts.js') }}"></script>
    <title>Website Profile RT 002 Desa Tanah Datar</title>
    @vite('resources/css/app.css')
</head>
<body>
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    @yield('content')
</body>
