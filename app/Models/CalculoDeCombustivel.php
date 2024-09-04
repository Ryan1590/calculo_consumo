<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;

    public function calcular($distancia, $autonomia)
    {
        $precoCombustivel = 5.90;
        $consumo = $distancia / $autonomia;
        $valor = $consumo * $precoCombustivel;

        return $valor;
    }
}
