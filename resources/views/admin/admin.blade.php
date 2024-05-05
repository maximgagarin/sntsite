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


    <h4 class="text-center mt-5 mb-5"> Панель администратора</h4>






    <h5> Добавить новость</h5>

    <div class="row">
        <div class="col-8">
            <form action="{{route('post.store')}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                    <textarea class="form-control" name="title" rows="2"></textarea>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                    <textarea class="form-control" id="text-area" name="text" rows="20"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <h4>Все новости</h4>

        <table class="table table-bordered border-success table-hover">
            <thead>
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <td> {{$new->created_at}}</td>
                    <td> {{$new->title}}</td>
                   <td><form action="{{ route('post.destroy', $new->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены, что хотите удалить?')">Удалить</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mt-5">
        <h4>Загрузить документ</h4>
       @if(isset($pdfPath))
            <a href="{{ asset($pdfPath) }}">файл</a>

        @endif
        <div class="col-5">
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01" name="pdf_file">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nameFile" name="fileName">
                </div>
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <h4>Загрузить выполненные работы</h4>

        <div class="col-5">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01" name="imgfile">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nameFile" name="fileName">
                </div>
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
    </div>


</div>




</body>
</html>

<style>
    /* Set the height of the CKEditor instance */
    .ck-editor__editable {
        min-height: 200px; /* Set the minimum height */
    }
</style>

<script>
    ClassicEditor
        .create( document.querySelector( '#text-area' ), {

            minHeight: '100px' // Set the minimum height of the editor
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
