<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>
<body style="color: blue; background: orange;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Mysite.test</h1>
            </div>
            <div class="col-sm-12">
            @include('partaiels.navlinks')
            @yield('content')
            <!-- {{ Request::route()->getname() }} -->
            @if(Request::route()->getname()== 'home')
                <h1>จริง</h1>
            @endif
            </div>
        </div>
    </div>
</body>
</html>