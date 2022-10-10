<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Curso extends Model
{
    use HasApiTokens;

    protected $fillable = [
        'titulo',
        'descricao',
        'valor',
        'image',
        'publicado',
    ];
}
