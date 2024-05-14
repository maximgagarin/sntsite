


@extends('admin.admin')
@section('content')


    <h4>Загрузить документ</h4>

    <div class="col-5">
        <form action="{{ route('docs.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="file" name="url">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="nameFile" name="text" placeholder="Название файла">
            </div>
            <button type="submit" class="btn btn-primary">Загрузить</button>
        </form>
    </div>

@endsection



