@extends('layout')
@section('content')



    @foreach($posts as $post)
        <div id="news" class="mb-5">
            <a href=""> <h5>{{$post->title}}</h5></a>
            <div style="width: 160px"><p class="text-center" style="background:lightgray"> {{$post->created_at}}</p></div>
            <p class="mt-5">
                {!! $post->text !!}
            </p>
        </div>
    @endforeach
@endsection
