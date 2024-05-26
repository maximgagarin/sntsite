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
            <ul class="nav__ul" style="font-size: 14px">
                <li>садоводческое некоммерческое товарищество "Заря-2"</li>
                <li>тел. 79-40-68</li>
                <li>e-mail: kbgtwr39@yandex.ru</li>
                <li>Офис: Боевый пр. 39 пн-пт</li>
                <li>
                    <a  style="color: black" href="{{route('registr')}}">Вход</a>
                </li>
                @auth
                    <li >
                        <a style="color: black" href="{{route('admin')}}">Админ</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>

    <div class="row justify-content-between head  mt-1"  >
                <div class="col-2 ">
                    <h2 class="logo-h2"><span style="color: #29B638">СНТ</span> "ЗАРЯ-2"</h2>
                </div>
                <div class="col-10">
                   <x-menu />
                </div>
    </div>
    <div class="row mt-5 ">
        <div class="col-lg-12 col-12 " >
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
