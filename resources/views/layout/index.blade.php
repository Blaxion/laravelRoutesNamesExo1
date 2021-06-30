<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">HOME</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{route('/contact/sav')}}">sav</a>
                    <a class="nav-link" href="{{route('/contact/partenariat')}}">partenariat</a>
                    <a class="nav-link" href="{{route('/contact/info')}}">info</a>
                    <a class="nav-link" href="{{route('/team/front')}}">frontend</a>
                    <a class="nav-link" href="{{route('/team/back')}}">backend</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('body')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
