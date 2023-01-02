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
            $table->string('marca',100)->nullable();
            $table->string('modelo',100)->nullable();
            $table->string('indicacao',100)->nullable();
            $table->integer('peso')->nullable();
            $table->string('sola',100)->nullable();
            $table->string('aderencia',100)->nullable();
            $table->string('entressola',100)->nullable();
            $table->integer('drop')->nullable();
            $table->integer('amortecimento')->nullable();
            $table->integer('estabilidade')->nullable();
            $table->string('cabedal',100)->nullable();
            $table->string('respirabilidade',100)->nullable();
            $table->string('lingua',100)->nullable();
            $table->string('cadarco',100)->nullable();
            $table->integer('preco')->nullable();
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
