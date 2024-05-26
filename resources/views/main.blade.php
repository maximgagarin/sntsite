@extends('layout')
@section('content')


<h5 class="mb-4">Новости</h5>
@foreach($postPin as $post)
    <div id="news" class="mb-3" style="background-color: lightgray">
        <a href=""> <h6>{{$post->title}}</h6></a>
        <div style="width: 120px"><p class="text-center" style="background:lightgray; font-size: 12px; color:grey"> {{$post->created_at}}</p></div>
        <p class="mt-3">
            {!! $post->text !!}
        </p>
        <img class="mb-3" src="  {{url('storage/' . $post->img) }}" alt="" style="max-width: 700px">
    </div>
@endforeach
@foreach($posts as $post)
    <div id="news" class="mb-3">
        <a href=""> <h6>{{$post->title}}</h6></a>
        <div style="width: 120px"><p class="text-center" style="background:lightgray; font-size: 12px; color:grey"> {{$post->created_at}}</p></div>
        <p class="mt-3">
            {!! $post->text !!}
        </p>
        <img class="mb-3" src="  {{url('storage/' . $post->img) }}" alt="" style="max-width: 700px">
    </div>
@endforeach
@endsection
