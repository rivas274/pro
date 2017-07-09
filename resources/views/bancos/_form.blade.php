@extends('layouts.app')
@section('content')
@component('component.container')
    @slot('title')
        @if($banco->exists)
            Editar Banco
        @else    
            Crear Banco
        @endif
    @endslot
    @slot('content')
        @if($banco->exists)
        <form action="{{ route('bancoUpdate',['banco'=>$banco->id]) }}" method="post">
            {!! method_field('PUT') !!} 
        @else    
        <form action="{{ route('bancoStore') }}" method="post">
        @endif
            {!! csrf_field() !!} 
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input  type="text" 
                        class="form-control" 
                        name="nombre" 
                        value="{{ $banco->nombre or old('nombre') }}" 
                        placeholder="nombre">
            </div>
            <a href="{{ route('bancos') }}" class="btn">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    @endslot
@endcomponent
@endsection
