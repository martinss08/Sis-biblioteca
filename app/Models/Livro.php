<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'isbn',
        'ano',
        'quantidade',
        'descricao'
    ];
}
