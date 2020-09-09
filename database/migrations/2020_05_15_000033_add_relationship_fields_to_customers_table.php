<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->unsignedInteger('carrier_id')->nullable();
            $table->foreign('carrier_id', 'carrier_fk_1475236')->references('id')->on('carriers');
        });
    }
}
