<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Imc_c;

class Imc extends Controller
{
    public function index(){
        
        return view('in');

    }
    public function resp(){

        $x = new Imc_c();

        $imc = $x->calc();

        return view('out',['imc'=>$imc]);

    }
}
