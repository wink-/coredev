<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('code')->unique();
            $table->string('email')->nullable();
            $table->string('pin')->nullable();
            $table->string('password')->nullable();
            $table->boolean('production')->default(0)->nullable();
            $table->boolean('supervisor')->default(0)->nullable();
            $table->boolean('entering')->default(0)->nullable();
            $table->boolean('shipping')->default(0)->nullable();
            $table->boolean('quoting')->default(0)->nullable();
            $table->boolean('pricing')->default(0)->nullable();
            $table->boolean('billing')->default(0)->nullable();
            $table->boolean('administrator')->default(0)->nullable();
            $table->longText('note')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
