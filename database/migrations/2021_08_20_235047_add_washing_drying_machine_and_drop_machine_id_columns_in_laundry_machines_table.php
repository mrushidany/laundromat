<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWashingDryingMachineAndDropMachineIdColumnsInLaundryMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laundry_machine_details', function (Blueprint $table) {
            $table->integer('washine_machine_id')->after('laundry_details_id')->nullable();
            $table->integer('drying_machine_id')->after('washine_machine_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laundry_machine_details', function (Blueprint $table) {
            //
        });
    }
}
