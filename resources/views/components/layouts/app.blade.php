<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>

    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/png">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
</head>

<body>

    <div class="text-center my-5">
        <img src="{{ asset('assets/images/logo.png')}}" alt="logo" width="128px">
    </div>


    {{ $slot }}

    <script src="{{ asset('assets/bootstrpa/bootstrap.bundle.min.js')}}"></script>
</body>

</html>