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
        Schema::create('camino_centers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('camino_cps_id');
            $table->foreign('camino_cps_id')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate()
                    ->references('id')->on('camino_cps');
            $table->unsignedBigInteger('center_cps_id');
            $table->foreign('center_cps_id')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate()
                    ->references('id')->on('center_cps');
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
        Schema::dropIfExists('camino_centers');
    }
};
