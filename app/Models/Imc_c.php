<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imc_c extends Model
{

    public function calc(){

        $h = $_GET['altura'];
        $kg = $_GET['kg'];

        $r = $kg/($h*$h);

        return $r;

    }

    use HasFactory;
}
