<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hemocentro extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'nome_responsavel',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'numero',
        'email_contato',
        'telefone_contato'
    ];
}
