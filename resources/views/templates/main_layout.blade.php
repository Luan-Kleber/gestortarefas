<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    @include('nav')

    @yield('content')
    
    @include('footer')
    
    <script src=" {{ asset('assets/bootstrap/bootstrap.bundle.min.js') }} "></script>

</body>
</html>