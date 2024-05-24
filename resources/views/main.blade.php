@extends('layout')
@section('content')


<h5 class="mb-5">Новости</h5>
    @foreach($posts as $post)
        <div id="news" class="mb-5">
            <a href=""> <h5>{{$post->title}}</h5></a>
            <div style="width: 120px"><p class="text-center" style="background:lightgray; font-size: 12px; color:grey"> {{$post->created_at}}</p></div>
            <p class="mt-5">
                {!! $post->text !!}
            </p>
            <img class="mb-3" src="  {{url('storage/' . $post->img) }}" alt="" style="max-width: 700px">
        </div>
    @endforeach
@endsection
