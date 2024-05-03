@extends('layout')
@section('content')
    <div id="admin">


        <form action="{{route('post.store')}}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                <input type="text" class="form-control" name="title" >

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="text" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
