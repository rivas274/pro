<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Banco;
use App\Http\Requests\CreatePostRequest;
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
    public function create(Banco $banco){
        return view('bancos.create');
    }
    public function store(CreateBancosRequest $request){
        //DB::connection()->enableQueryLog();
        $bancos=New Banco;
        $bancos->fill($request->all())->save();
        //dd(DB::getQueryLog());
        return redirect()->rute('bancos');
    }
}
