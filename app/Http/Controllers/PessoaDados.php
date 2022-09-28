<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PessoaCalcs;

class PessoaDados extends Controller
{
    public function index(){
        
        return view('in');

    }
    public function resp(){

        $x = new PessoaCalcs();

        $imc = $x->imc();

        $dt = explode('|',$imc);

        return view('out',['imc'=>$dt[0],"tipo"=>$dt[1]]);

    }
}
