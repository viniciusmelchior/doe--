<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'numero'
    ];

    public function usuario()
    {
        $this->belongsTo(User::class);
    }
}
