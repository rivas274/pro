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
                <div>
                    {{ $banco->nombre }} 
                    <small class="pull-right">
                        <a  class="btn btn-xs btn-primary"  
                            title="Edit"
                            href="{{ route('bancoEdit',['banco'=>$banco->id]) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a  class="btn btn-xs btn-primary"  
                            title="Show"
                            href="{{ route('bancoShow',['banco'=>$banco->id]) }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <form   action="{{ route('bancoDelete',['banco'=>$banco->id]) }}" 
                                method="post" class="delete">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!} 
                            <button class="btn btn-xs btn-primary"  
                                    type="submit" >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </small>
                </div>
            </li>
            @endforeach
            {{ $bancos->render() }}
        </ul>
    @endslot
@endcomponent
@endsection
