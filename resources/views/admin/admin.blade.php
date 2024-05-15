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
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-between head  ">
        <div class="col-4 mt-2">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('images/logo5.jpg') }}" alt="">
                </div>
                <div class="col-9">
                    <h2  style=" margin: 0;  "><span class="text-warning">СНТ</span> "ЗАРЯ-2"</h2>
                    <p  style=" margin-top: 0; font-size: 12px; ">садоводческое некоммерческое товарищество</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <p class="mt-2">
                <a href="{{route('contacts')}}">Режим работы бухгатерии и правления</a>
            </p>
        </div>
        <div class="col-3">
            <span class=" mt-3  " style="font-size: 16px; display: block">тел. 79-40-68</span>
            <span class="text-center text-success">e-mail: kbgtwr39@yandex.ru</span>
        </div>
    </div>
    <div class="row">
        <x-navbar />
    </div>


    <h4 class="text-center mt-5 mb-2 bg-primary text-white"> Панель администратора</h4>

    <div class="row mb-4 justify-content-center">
       <div class="col-9">
           <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('admin')}}">Добавить новость</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.docs')}}">Документы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.water')}}">График подачи воды</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.bus')}}">Расписание автобусов</a>
            </li>

               <li class="nav-item">
                   <a class="nav-link" href="{{route('admin.tarif')}}">Тарифы</a>
               </li>
        </ul>
       </div>
    </div>

@yield('content')

</div>
</body>
</html>


