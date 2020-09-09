<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQuotesTable extends Migration
{
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id', 'customer_fk_1479101')->references('id')->on('customers');
            $table->unsignedInteger('contact_id')->nullable();
            $table->foreign('contact_id', 'contact_fk_1479103')->references('id')->on('contacts');
            $table->unsignedInteger('process_id');
            $table->foreign('process_id', 'process_fk_1479108')->references('id')->on('processes');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_1479136')->references('id')->on('users');
        });
    }
}
