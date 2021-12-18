<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confession', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->nullable();
            $table->foreign('username')->references('username')->on('users');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('confession');
            $table->integer('numberOfLikes');
            $table->integer('numberOfDislikes');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('confession');
    }
}
