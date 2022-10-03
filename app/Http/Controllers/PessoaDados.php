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

        $sono = $x->sono();

        $sonodt = explode('|',$sono);

        $imcdt = explode('|',$imc);

        return view('out',['imc'=>$imcdt[0],'tipo'=>$imcdt[1],'ideal'=>$sonodt[0],'hds'=>$sonodt[1]]);

    }
}
