@extends('layouts.app')
@section('content')
@component('component.container')
    @slot('title','Banco')
    @slot('content')
        @if(count($errors)>0)
        <div class='alert alert-danger'>
        @foreach($errors->getMessages() as $key => $message)
            {{$key}} => {{json_encode($message)}}
        @endforeach
        </div>
        @endif
        <form action="{{ route('bancoStore') }}" method="post">
            {!! csrf_field() !!} 
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input  type="text" 
                        class="form-control" 
                        name="nombre" 
                        value="{{ old('nombre') }}" 
                        placeholder="nombre">
            </div>
            <a href="{{ route('bancos') }}" class="btn">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    @endslot
@endcomponent
@endsection
