<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'client_pedido_id',
        'name',
        'prazo',
        'status',
    ];

    public function saleItem(): HasMany
    {
        return $this->hasMany(SaleItem::class);
    }
}
