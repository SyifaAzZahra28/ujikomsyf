<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog-Z About page</title>
    <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/css/templatemo-style.css') }}"> 
    
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')

    <script src="{{asset ('assets/js/plugins.js') }}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>