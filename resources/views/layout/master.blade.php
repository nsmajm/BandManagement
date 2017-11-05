<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<!-- Nav Menu start -->
<div class="container backgroundiamge">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home.index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ticket Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">View Songs</a>
                </li>
                <li class="nav-item searchcenter">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>

            </ul>


            <ul class="nav navbar-nav navbar-right">

                @if(session()->has('loggedUser'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;">
                            <img src="https://i.pinimg.com/236x/84/98/3d/84983d8f1d03ed533104945dae8ca024--generators-avatar.jpg" style="width:32px; height:32px; position:absolute; top:2px; left:10px; border-radius:50%">
                            {{session()->get('loggedUser')->username}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{route('account.show', session()->get('loggedUser')->userid)}}">view Profile</a>
                            <a class="dropdown-item" href="{{route('account.edit',session()->get('loggedUser')->userid)}}">update Profile</a>
                            <a class="dropdown-item" href="{{route('login.destroy')}}">Logout</a>

                        </div>
                    </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login.index')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('account.index')}}">Register</a>
                    </li>

                @endif
            </ul>
        </div>
    </nav>

</div>
<div class="empty-separator">

</div>

<!-- nav menu end -->
<!-- Content Section Start -->
<div class="container">
    <div class="row">
        <div class=" offset-md-1"></div>
        <div class="col-md-9 mainContent">@yield('maincontent')</div>

    </div>
</div>
<!-- Content Section End -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>
</body>
</html>