<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Banco;

class BancosController extends Controller
{
    public function index(){
        $bancos=Banco::all();
        return view('bancos.index')->with(['bancos'=>$bancos]);
    }
    public function show(Banco $banco){
        return view('bancos.show')->with(['banco'=>$banco]);
    }
    public function create(Banco $banco){
        return view('bancos.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required|string|min:6|max:255|unique:bancos',
        ]);
        dd($request->all());
        return view('bancos.create');
    }
}
