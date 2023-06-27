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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('name',255);
            $table->string('surname',255);
            $table->enum('sex', ['Male', 'Female']);
            $table->integer('age');
            $table->decimal('weight' ,5,2)->nullable();
            $table->decimal('bench',5,2)->nullable();
            $table->decimal('squat',5,2)->nullable();
            $table->decimal('deadlift',5,2)->nullable();
            $table->string('role');
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
        Schema::dropIfExists('users');
    }
};
