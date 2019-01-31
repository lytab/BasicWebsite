<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <script src="js/app.js"></script>
</head>
<body >
        @include('inc.navbar')
        <br><br><br>
        <div class="container">
            @if (Request::is('/'))
                
            @include('inc.showcase')
            @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc.messages')
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
    
                </div>
            </div>
            
        </div>
        <footer id="footer" class="text-center">
            <p>CopyRight 2019 &copy; UdemyBasicWebsite</p>

        </footer>

</body>
</html>