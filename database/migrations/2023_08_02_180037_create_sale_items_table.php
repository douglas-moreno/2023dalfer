<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sale_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained();
            $table->dateTime('data_pedido')->nullable();
            $table->integer('Item')->nullable();
            $table->string('Cod_Item', 50)->nullable();
            $table->string('Cod_Item_Red', 15)->nullable();
            $table->string('Descricao_Item')->nullable();
            $table->string('Descricao_Item_Red')->nullable();
            $table->integer('Qtde_Item')->nullable();
            $table->integer('Decimal_Item')->nullable();
            $table->integer('Qtde_Cert')->nullable();
            $table->dateTime('Data_Item')->nullable();
            $table->string('status', 10)->nullable();
            $table->string('Norma', 50)->nullable();
            $table->double('Medida')->nullable();
            $table->string('Grau', 50)->nullable();
            $table->string('Bitola', 50)->nullable();
            $table->string('Bitola2', 50)->nullable();
            $table->string('Bitola_Det', 50)->nullable();
            $table->string('Bitola2_Det', 50)->nullable();
            $table->string('Extremidade', 50)->nullable();
            $table->string('Polegada', 50)->nullable();
            $table->string('Polegada2', 50)->nullable();
            $table->string('Unidade', 5)->nullable();
            $table->string('Material', 50)->nullable();
            $table->string('Acabamento', 50)->nullable();
            $table->boolean('Especifica')->nullable();
            $table->string('Especificacao', 30)->nullable();
            $table->string('Raiox', 3)->nullable();
            $table->boolean('Tratamento')->nullable();
            $table->boolean('Inspecao')->nullable();
            $table->string('Cod_Cliente', 50)->nullable();
            $table->boolean('Preparacao')->nullable();
            $table->boolean('Solda')->nullable();
            $table->boolean('TTermico')->nullable();
            $table->boolean('Usinagem')->nullable();
            $table->boolean('Calibragem')->nullable();
            $table->boolean('Esquadrejamento')->nullable();
            $table->string('Obs')->nullable();
            $table->string('Obs_Eng')->nullable();
            $table->string('Desenho', 50)->nullable();
            $table->boolean('C_Banda')->nullable();
            $table->boolean('Ensaios')->nullable();
            $table->boolean('C_Boca')->nullable();
            $table->string('Ensaios_MP', 50)->nullable();
            $table->string('Gab_Trac_MP', 50)->nullable();
            $table->string('Conformacao', 50)->nullable();
            $table->string('Ferramental', 50)->nullable();
            $table->string('Pressao_Conf', 50)->nullable();
            $table->string('Camisa', 50)->nullable();
            $table->string('Gab_Corte_Banda', 50)->nullable();
            $table->string('EPS', 50)->nullable();
            $table->string('TT', 50)->nullable();
            $table->string('Ensaios_Prod', 50)->nullable();
            $table->string('Corte_Boca', 50)->nullable();
            $table->string('Trat_Superficie', 50)->nullable();
            $table->string('Acabamento_Final')->nullable();
            $table->string('Embalagem', 50)->nullable();
            $table->string('Ranhura', 50)->nullable();
            $table->double('Peso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_items');
    }
};
