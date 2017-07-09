<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Banco;
use App\Http\Requests\CreateBancosRequest;
//use DB; 

class BancosController extends Controller
{
    public function index(){
        $bancos=Banco::orderBy('id','desc')->paginate(10);
        return view('bancos.index')->with(['bancos'=>$bancos]);
    }
    public function show(Banco $banco){
        return view('bancos.show')->with(['banco'=>$banco]);
    }
    public function create(){
        $banco=new Banco;
        return view('bancos._form')->with(['banco'=>$banco]);
    }
    public function store(CreateBancosRequest $request){
        //DB::connection()->enableQueryLog();
        $banco=Banco::create($request->only('nombre'));
        //dd(DB::getQueryLog());
        session()->flash('message','Banco Creado');
        return redirect()->route('bancoShow',['banco'=>$banco->id]);
    }
    public function edit(Banco $banco){
        return view('bancos._form')->with(['banco'=>$banco]);
    }
    public function update(Banco $banco,CreateBancosRequest $request){
        $banco->update($request->only('nombre'));
        session()->flash('message','Banco Editado');
        return redirect()->route('bancoShow',['banco'=>$banco->id]);
    }
    public function delete(Banco $banco){
        $banco->delete();
        session()->flash('message','Banco Eliminado');
        return redirect()->route('bancos');
    }
}
