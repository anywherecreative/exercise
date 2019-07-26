<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('page.title', 'Workout')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Workout Application" name="description" />
    <meta content="Anywhere Creative" name="author" />

    <!-- App favicon -->
    {{--<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">--}}
    {{--<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">--}}
    {{--<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">--}}
    {{--<link rel="manifest" href="/webmanifest" crossorigin="use-credentials">--}}
    {{--<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">--}}
    {{--<meta name="msapplication-TileColor" content="#da532c">--}}
    {{--<meta name="theme-color" content="#ffffff">--}}

@yield('page.css.top')

<!-- App css -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    @yield('page.js.top')

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-class') }} alert-dismissible fade show d-flex align-items-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="mdi mdi-check-circle mr-2"></i>{{ Session::get('message') }}
                    </div>
                @endif
                @yield('page.content')
            </div>
        </div>
    </div>
</body>