<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function index(){

        $pessoas = Pessoa::all();
        
        return view('pessoas.index',['pessoas' => $pessoas]);
    }

    public function create(){

        return view('pessoas.create');
    }

    public function store(Request $request){

        Pessoa::create($request->all());
        return redirect()->route('pessoas-index');
    }
}
