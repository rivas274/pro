@extends('layouts.app')
@section('content')
@component('component.container')
    @slot('title')
        <div >
            Banco
            <a  class="btn btn-sm btn-primary pull-right" 
                title="List"
                href="{{ route('bancos') }}">
                Return
            </a>
        </div>
    @endslot
    @slot('content')
        <ul>
            <li>
                {{ $banco->nombre }}
            </li>
        </ul>
    @endslot
@endcomponent
@endsection
