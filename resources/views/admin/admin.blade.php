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
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="row justify-content-between head  " style="background-color: lightgray">
        <div class="col-lg-4 col-8 mt-2">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('images/logo5.jpg') }}" alt="">
                </div>
                <div class="col-8">
                    <h2 class="logo-h2"><span class="text-danger">СНТ</span> "ЗАРЯ-2"</h2>
                    <p class="logo-p" style=" margin-top: 0; font-size: 12px; ">садоводческое некоммерческое
                        товарищество</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-4">
            <span class="span-logo mt-2">тел. 79-40-68</span>
            <span class="span-logo  text-success">e-mail: kbgtwr39@yandex.ru</span>
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


