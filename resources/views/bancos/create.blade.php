@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Banco</div>
                <div class="panel-body">
                @if(count($errors)>0)
                <div class='alert alert-danger'>
                    {{ json_encode($errors->all()) }}
                    {{ json_encode($errors->has('nombre')) }}
                </div>
                @endif
                    <form action="{{ route('bancoStore') }}" method="post">
                        {!! csrf_field() !!} 
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input    type="text" 
                                    class="form-control" 
                                    name="nombre" 
                                    placeholder="nombre">
                        </div>
                        <a href="{{ route('bancos') }}" class="btn">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
