<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'data_pedido',
        'Item',
        'Cod_Item',
        'Cod_Item_Red',
        'Descricao_Item',
        'Descricao_Item_Red',
        'Qtde_Item',
        'Decimal_Item',
        'Qtde_Cert',
        'Data_Item',
        'status',
        'Norma',
        'Medida',
        'Grau',
        'Bitola',
        'Bitola2',
        'Bitola_Det',
        'Bitola2_Det',
        'Extremidade',
        'Polegada',
        'Polegada2',
        'Unidade',
        'Material',
        'Acabamento',
        'Especifica',
        'Especificacao',
        'Raiox',
        'Tratamento',
        'Inspecao',
        'Cod_Cliente',
        'Preparacao',
        'Solda',
        'TTermico',
        'Usinagem',
        'Calibragem',
        'Esquadrejamento',
        'Obs',
        'Obs_Eng',
        'Desenho',
        'C_Banda',
        'Ensaios',
        'C_Boca',
        'Ensaios_MP',
        'Gab_Trac_MP',
        'Conformacao',
        'Ferramental',
        'Pressao_Conf',
        'Camisa',
        'Gab_Corte_Banda',
        'EPS',
        'TT',
        'Ensaios_Prod',
        'Corte_Boca',
        'Trat_Superficie',
        'Acabamento_Final',
        'Embalagem',
        'Ranhura',
        'Peso',
    ];

    function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
