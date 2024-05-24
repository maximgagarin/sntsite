<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>Заря-2</title>
</head>
<body class="body">
<div class="container">
    <div class="row">
        <div class="head-head">
            <ul class="nav__ul" style="">
                <li>890909900</li>
                <li>assaff</li>
                <li>sdfdf</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-between head  " >
            <div class="row mt-3" style="background-color: #192919">
                <div class="col-2">
                    <img src="{{ asset('images/logo-green.jpg') }}" alt="">
                </div>
                <div class="col-10">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('main')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{route('tarif')}}"> Тарифы </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{route('document')}}">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{route('contacts')}}">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('water')}}">График подачи воды</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('works')}}">Выполненные работы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('bus')}}">Расписание автобусов</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('bank-details')}}">Реквизиты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('registr')}}">Вход</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin')}}">Администратор</a>
                            </li>
                        @endauth
                    </ul>

                </div>
            </div>


    </div>



    <div class="row mt-5 ">
{{--        <div class="col-lg-2 col-3">--}}
{{--            <x-left-menu/>--}}
{{--        </div>--}}
        <div class="col-lg-8 col-9 " >
            @yield('content')
        </div>
    </div>

</div>
<div class="row">
    <div class="footer">
    </div>
</div>
</body>
</html>
