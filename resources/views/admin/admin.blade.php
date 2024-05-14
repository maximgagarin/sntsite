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




    <div class="row justify-content-between head bg-success ">
        <div class="col-5 mt-2">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/logo5.jpg') }}" alt="">
                </div>
                <div class="col-6">
                    <h2 style=" margin: 0; color: white "><span class="text-warning">СНТ</span> "ЗАРЯ-2"</h2>
                    <p style=" margin-top: 0; font-size: 12px; color: white ">садоводческое некоммерческое
                        товарищество</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <span class=" mt-3 text-warning " style="font-size: 16px; display: block">тел. 8-999-999-99-99</span>
            <span class="text-center  text-white">e-mail: snt@snt.ru</span>
        </div>
    </div>
    <div class="row">
      <x-navbar/>
    </div>


    <h4 class="text-center mt-5 mb-2 bg-success text-white"> Панель администратора</h4>

    <div class="row mb-4 justify-content-center">
       <div class="col-8">
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
                <a class="nav-link" href="#">О товариществе</a>
            </li>
        </ul>
       </div>
    </div>



@yield('content')


</div>







</body>
</html>


