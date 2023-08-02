<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'name',
        'reducao',
        'schedule',
        'material',
        'norma_constr',
        'grau',
        'pressao',
        'norma_material',
    ];
}
