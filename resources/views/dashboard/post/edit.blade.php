@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post {{$post->title}}</h1>
    @include('dashboard.fragment._error-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @method("PATCH")
        @include('dashboard.post._form', ["task" => "edit"])
    </form>

@endsection