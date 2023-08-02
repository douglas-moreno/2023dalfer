<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'client_id',
        'name',
        'active',
    ];
}
