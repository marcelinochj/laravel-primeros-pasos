@extends('layout.master')

@section('content')
<p>
    @include('test.fragmento.subview')

    
    @forelse ($posts as $item)
        <div class="box item">
            <p>*{{$item}}</p>
        </div>
    @empty
        No hay datos
    @endforelse

    {{$name}}
    
</p>
@endsection