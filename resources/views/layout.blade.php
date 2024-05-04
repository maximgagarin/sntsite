<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-between head bg-success ">
        <div class="col-5 mt-2">
            <div class="row">
          <div class="col-2">
              <img src="{{ asset('images/logo5.jpg') }}" alt="">
          </div>
            <div class="col-6">
                <h2    style=" margin: 0; color: white "><span class="text-warning">СНТ</span> "ЗАРЯ-2"</h2>
                <p  style=" margin-top: 0; font-size: 12px; color: white ">садоводческое некоммерческое товарищество</p>
            </div>
            </div>
        </div>
        <div class="col-2">
            <span class=" mt-3 text-warning " style="font-size: 16px; display: block">тел. 8-999-999-99-99</span>
            <span class="text-center  text-white">e-mail: snt@snt.ru</span>
        </div>
    </div>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="navbarDropdown">
                            <a class="nav-link dropdown-toggle text-white" href="{{route('main')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                                Главная
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-white" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="navbarDropdown">
                            <a class="nav-link dropdown-toggle text-white" href="{{route('news')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                                Новости
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="navbarDropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                                О товариществе
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="navbarDropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                                Решения собраний
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">1</a></li>
                                <li><a class="dropdown-item" href="#">2n</a></li>
                                <li><a class="dropdown-item" href="#">3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="navbarDropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                                Документы
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="navbarDropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                                Контакты
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Найти">
                        <button class="btn btn-primary" type="submit">Поиск</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="row mt-5 ">
        <div class="col-2 ">
            <x-left-menu />
        </div>
        <div class="col-6 "  style="margin-left: 40px">
         @yield('content')
        </div>
    </div>
    <div class="row">
        <div class="footer">
            <img id="footer_img" src="{{ asset('images/Amazing5.jpg') }}" alt="">
        </div>
    </div>
</div>
</body>
</html>
