<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIssuedByColumnToLaundryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laundry_details', function (Blueprint $table) {
            $table->unsignedBigInteger('issued_by')->after('pickup_date');
            $table->foreign('issued_by')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laundry_details', function (Blueprint $table) {
            $table->dropForeign('issued_by');
        });
    }
}
