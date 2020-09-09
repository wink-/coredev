<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalTypesTable extends Migration
{
    public function up()
    {
        Schema::create('cal_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('proc_link')->nullable();
            $table->timestamps();
        });
    }
}
