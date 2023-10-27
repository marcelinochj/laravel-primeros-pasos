@extends('dashboard.layout')

@section('content')
    <a class="btn btn-succes my-2" href="{{route('post.create')}}">Crear</a>
    <table class="table mb-3">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Posteado
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>
                    {{$post->title}}
                </td>
                <td>
                    {{$post->category->title}}
                </td>
                <td>
                    {{$post->posted}}
                </td>
                <td>
                    <a class="btn btn-primary my-2" href="{{route('post.edit',$post)}}">Editar</a>
                    <a class="btn btn-primary my-2" href="{{route('post.show',$post)}}">Ver</a>
                    
                    <form action="{{route('post.destroy', $post)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger my-2" type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
    
@endsection