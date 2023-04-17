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
        //
        Schema::create('rutas_paradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rutas_b_id');
            $table->foreign('rutas_b_id')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate()
                    ->references('id')->on('rutas_bs');
            $table->unsignedBigInteger('paradas_b_id');
            $table->foreign('paradas_b_id')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate()
                    ->references('id')->on('paradas_bs');   
            $table->rememberToken();
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
        //
        Schema::dropIfExists('rutas_paradas');
    }
};
