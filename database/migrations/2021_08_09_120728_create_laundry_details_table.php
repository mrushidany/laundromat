<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('routine_client_id');
            $table->string('quantity');
            $table->date('pickup_date');
            $table->foreign('routine_client_id')->references('id')->on('routine_clients')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('laundry_details');
    }
}
