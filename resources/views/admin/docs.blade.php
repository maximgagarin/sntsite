


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

    <div class="row mb-4 mt-4">
        <table class="table table-bordered border-success  mt-4">
            <thead>
            <tr>
                <th>Документ</th>
                <th>Документ</th>


            </tr>
            </thead>
            <tbody>
            @foreach($files as $file)
                <tr>
                    <td><a href=" {{url('storage/' . $file->url) }} ">{{$file->text}}       </a></td>

                    <td><form action="{{route('docs.destroy', $file->id)}}" method="POST">
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

@endsection



