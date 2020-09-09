<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCalDevicesTable extends Migration
{
    public function up()
    {
        Schema::table('cal_devices', function (Blueprint $table) {
            $table->unsignedInteger('source_id')->nullable();
            $table->foreign('source_id', 'source_fk_2000276')->references('id')->on('cal_sources');
            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id', 'type_fk_2000277')->references('id')->on('cal_types');
            $table->unsignedInteger('period_id')->nullable();
            $table->foreign('period_id', 'period_fk_2000278')->references('id')->on('cal_periods');
            $table->unsignedInteger('location_id')->nullable();
            $table->foreign('location_id', 'location_fk_2000279')->references('id')->on('cal_locations');
            $table->unsignedInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_2000282')->references('id')->on('cal_owners');
        });
    }
}
