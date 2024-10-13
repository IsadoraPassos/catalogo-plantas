<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;

    // Defina quais colunas podem ser preenchidas em massa
    protected $fillable = [
        'nome_cientifico',
        'nome_comum',
        'bioma',
        'descricao'
    ];
}
