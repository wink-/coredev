<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session')->nullable();
            $table->string('jwt')->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->string('key_strokes')->nullable();
            $table->string('user')->nullable();
            $table->string('email')->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
