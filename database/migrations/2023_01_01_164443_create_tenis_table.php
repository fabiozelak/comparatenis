<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenis', function (Blueprint $table) {
            $table->id();
            $table->string('marca',100);
            $table->string('modelo',100);
            $table->string('indicacao',100);
            $table->integer('peso');
            $table->string('sola',100);
            $table->string('aderencia',100);
            $table->string('entressola',100);
            $table->integer('drop');
            $table->integer('amortecimento');
            $table->integer('estabilidade');
            $table->string('cabedal',100);
            $table->string('respirabilidade',100);
            $table->string('lingua',100);
            $table->string('cadarco',100);
            $table->integer('preco');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenis');
    }
};
