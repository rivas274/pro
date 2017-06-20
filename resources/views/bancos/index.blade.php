@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Banco</div>
                <div class="panel-body">
                <ul>
                    @foreach($bancos as $banco)
                    <li>{{ json_encode($banco) }} 
                    <a href="{{ route('bancoShow',['banco'=>$banco->id]) }}">Edit</a>
                    </li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
