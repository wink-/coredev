<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWorkordersTable extends Migration
{
    public function up()
    {
        Schema::table('workorders', function (Blueprint $table) {
            $table->unsignedInteger('part_id');
            $table->foreign('part_id', 'part_fk_1480286')->references('id')->on('parts');
        });
    }
}
