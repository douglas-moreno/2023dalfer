<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormaConstr extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'valor',
    ];
}
