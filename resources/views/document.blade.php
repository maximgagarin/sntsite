@extends('layout')
@section('content')
    <div>
        <h5>Документы СНТ "Заря-2"</h5>

        <table class="table table-bordered border-success  mt-4">
            <thead>
            <tr>
                <th>Документ</th>

            </tr>
            </thead>
            <tbody>
            @foreach($files as $file)
                <tr>
                    <td><a href=" {{url('storage/' . $file->url) }} ">{{$file->text}}       </a></td>


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
