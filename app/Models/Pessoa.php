<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'email', 
        'dt_nasc',
        'cpfCnpj',
        'razao_social',
        'tp_pessoa',
    ];
}
