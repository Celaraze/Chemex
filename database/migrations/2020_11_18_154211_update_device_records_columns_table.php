<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDeviceRecordsColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('device_records', function (Blueprint $table) {
            $table->double('price')->nullable();
            $table->date('purchased')->nullable();
            $table->date('expired')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('device_records', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('purchased');
            $table->dropColumn('expired');
        });
    }
}
