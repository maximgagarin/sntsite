


@extends('admin')
@section('content')


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



@endsection



