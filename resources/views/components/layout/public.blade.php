<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss'])
</head>

<body>

    <x-navbar></x-navbar>
    {{ $slot }}
    @vite(['resources/js/app.js'])
</body>

</html>
