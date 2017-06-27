@extends('layouts.app')
@section('content')
@component('component.container')
    @slot('title')
        <div>
            Banco
            <a  class="btn btn-sm btn-primary pull-right" 
                title="Create"
                href="{{ route('bancosCreate') }}">
                Create
            </a>
        </div>
    @endslot
    @slot('content')
        <ul>
            @foreach($bancos as $banco)
            <li>
                {{ $banco->nombre }} 
                <a  class="btn btn-xs btn-primary pull-right"  
                    title="Edit"
                    href="{{ route('bancoShow',['banco'=>$banco->id]) }}">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </li>
            @endforeach
            {{ $bancos->render() }}
        </ul>
    @endslot
@endcomponent
@endsection
