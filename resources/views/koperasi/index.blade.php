@extends('layouts.main')
    @include('koperasi.sections.gambar')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama Koperasi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@endsection
