<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundryMachineDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry_machine_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laundry_details_id');
            $table->unsignedBigInteger('machine_id');
            $table->foreign('laundry_details_id')->references('id')->on('laundry_details')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('machine_id')->references('id')->on('machines')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laundry_machine_details');
    }
}
