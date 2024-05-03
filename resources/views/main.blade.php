@extends('layout')
@section('content')



    @foreach($posts as $post)
            <div id="news">
                <a href=""> <h4>{{$post->title}}</h4></a>
                <h4> 10-05-2004</h4>
                <p>
                    {{$post->text}}
                </p>
            </div>
    @endforeach
@endsection
