@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post {{$category->title}}</h1>
    @include('dashboard.fragment._error-form')

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @method("PATCH")
        @include('dashboard.category._form')
    </form>

@endsection