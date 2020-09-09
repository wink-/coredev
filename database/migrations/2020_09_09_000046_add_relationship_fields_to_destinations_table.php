<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDestinationsTable extends Migration
{
    public function up()
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->unsignedInteger('customer_code_id')->nullable();
            $table->foreign('customer_code_id', 'customer_code_fk_1475265')->references('id')->on('customers');
        });
    }
}
