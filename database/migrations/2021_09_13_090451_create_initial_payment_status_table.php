<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialPaymentStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initial_payment_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laundry_cost_id');
            $table->string('initial_payment');
            $table->foreign('laundry_cost_id')->references('id')->on('laundry_costs')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('initial_payment_status');
    }
}
