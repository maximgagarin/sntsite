@extends('admin.admin')
@section('content')
    <h4 class="mb-3">Редактировать новость</h4>
    <div class="row">
        <div class="col-8">
            <form action="{{route('news.update')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Заголовок</label>
                    <input type="text" class="form-control" value="{{$news->title}}" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Текст</label>
                    <textarea class="form-control" id="area-news" name="text" rows="20">
                        {{ $news->text }}
                    </textarea>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" {{$news->pin === 1 ? 'checked' : ''}} name="pin" id="" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Закрепить новость
                    </label>
                </div>
                <input type="hidden" value="{{$news->id}}" name="id">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        /* Set the height of the CKEditor instance */
        .ck-editor__editable {
            min-height: 700px; /* Set the minimum height */
        }
    </style>

    <script>
        ClassicEditor
            .create(document.querySelector('#area-news'), {

                minHeight: '100px' // Set the minimum height of the editor
            })
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection



