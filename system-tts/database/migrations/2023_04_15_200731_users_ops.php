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
        Schema::create('users_ops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dni');
            $table->string('name');
            $table->date('nacimiento');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('type_service_id')->unsigned()->nullable();
            $table->foreign('type_service_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('type_service');
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
        Schema::dropIfExists('users_ops');
    }
};
