



@extends('admin.admin')
@section('content')

<h5 class="mb-4"> Добавить новость</h5>

<div class="row">
    <div class="col-8">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Заголовок новости</label>
                <textarea class="form-control" name="title" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                <textarea class="form-control" id="text-area" name="text" rows="20"></textarea>
            </div>
            <div class=" mb-3">
                <label for="inputGroupFile01" class="form-label">Прикрепить фото</label>
                <input type="file" class="form-control"  name="img" >
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" value="1" name="work" id="">
                <label class="form-check-label" for="flexCheckDefault">
                    Добавить в выполненные работы
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="1" name="banner" id="" >
                <label class="form-check-label" for="flexCheckChecked">
                    Разместить на главном баннере
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Добавить новость</button>
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

@endsection



