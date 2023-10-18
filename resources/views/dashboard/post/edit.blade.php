@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post {{$post->title}}</h1>
    @include('dashboard.fragment._error-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @method("PATCH")
        @include('dashboard.post._form')
    </form>

@endsection