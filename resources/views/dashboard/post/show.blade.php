@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post {{$post->title}}</h1>

    <p>{{$post->posted}}</p>
    <p>{{$post->description}}</p>
    <p>{{$post->content}}</p>


@endsection