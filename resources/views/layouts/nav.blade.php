<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="css/app.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Nonton Movies</title>
    </head>
    <body style="background-color: black">
        <header class="header-area overlay">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <a href="#" class="navbar-brand"> Nonton Movies </a>

                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="menu-icon-bar"></span>
                        <span class="menu-icon-bar"></span>
                        <span class="menu-icon-bar"></span>
                    </button>

                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li><a href="#" class="nav-item nav-link active">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="nav-item nav-link" data-toggle="dropdown">Genre</a>
                                <div class="dropdown-menu">
                                    @foreach($genres as $genre)
                                        <a href="genre/"{{$genre->id}} class="dropdown-item">{{$genre->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-item nav-link" data-toggle="dropdown">Tahun</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Dropdown Item 1</a>
                                    <a href="#" class="dropdown-item">Dropdown Item 2</a>
                                    <a href="#" class="dropdown-item">Dropdown Item 3</a>
                                    <a href="#" class="dropdown-item">Dropdown Item 4</a>
                                    <a href="#" class="dropdown-item">Dropdown Item 5</a>
                                </div>
                            </li>
                            <li><a href="#" class="nav-item nav-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="ml-2 pl-4 bg-light rounded rounded-pill shadow-sm">
                        <div class="input-group">
                            <input type="search" placeholder="Mau nonton apa?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
