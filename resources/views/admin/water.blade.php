


@extends('admin.admin')
@section('content')
    <h4>График подачи воды</h4>
    <div class="row">
        <div class="col-8">
            <form action="{{route('edit.water')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                    <textarea class="form-control" id="area-water" name="text" rows="20">
    {{ $waterText }}
</textarea>

                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
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
            .create( document.querySelector( '#area-water' ), {

                minHeight: '100px' // Set the minimum height of the editor
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection



