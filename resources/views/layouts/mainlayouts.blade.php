<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PAPA JOE'S | @yield('title')</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<body class="">
    <header id="dynamic" class="navbar fixed-top navbar-expand-lg navbar-dark navBlack">
        <div class="container-fluid">
            <a class="navbar-brand gradient" href="#">PAPA JOE'S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link hoverNav" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto hoverNav" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverNav" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto hoverNav" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto hoverNav" href="#">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <div class=" hero ">
        @yield('hero')
    </div>
  
        @yield('content')
 
    

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    {{-- !link js --}}
    <script src="js/script.js"></script>

</body>

</html>
