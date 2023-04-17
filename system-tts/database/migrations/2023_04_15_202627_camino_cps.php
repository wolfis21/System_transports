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
        Schema::disableForeignKeyConstraints();
        Schema::create('camino_cps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('cost');
            $table->unsignedBigInteger('users_ops_id')->unsigned()->nullable();
            $table->foreign('users_ops_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('users_ops');
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
        Schema::dropIfExists('camino_cps');
        Schema::dropIfExists('users_ops');
    }
};
