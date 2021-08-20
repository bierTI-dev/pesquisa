<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model
{
    use HasFactory;

    protected $table = 'pesquisa';

    protected $fillable = [
        'faixa_idade',
        'convenio',
        'faixa_salario',
        'motivo_emprestimo',
        'created_at',
        'updated_at'
    ];

}
