<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaCalcs extends Model{

    use HasFactory;
    public function imc(){

        $h = $_GET['altura'];
        $kg = $_GET['kg'];

        $r = $kg/($h*$h);

        if($r<18.5){
            $ty="abaixo";
        }
            elseif($r<24.9){
                $ty="normal";
            }
                elseif($r<24.9){
                    $ty="acima";
                }
                    else{
                        $ty="obeso";
                    }

        return $r."|".$ty;

    }
    public function sono(){

        $idade = $_GET['idade'];
        $hds = $_GET['hpnoite'];
        
        if($idade<=5){

            $max=14;
            $min=10;

        }
            else if($idade<=10){

                $max=11;
                $min=9;

            }
                else if($idade<60){

                    $max=9;
                    $min=8;

                }
                    else{

                        $max=8;
                        $min=7;

                    }

        $ideal = $min . "-" . $max;

        if($hds<$min){$sono="pouco";}

        else if($hds>$max){$sono="muito";}

        else{$sono="bom";}

        return $ideal ."|" . $sono;

    }
}
