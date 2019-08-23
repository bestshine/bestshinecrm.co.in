<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fee_id')->unsigned()->nullable();
            $table->integer('school_id')->unsigned()->nullable();
            $table->string('balance_installation_amount')->nullable();
            $table->string('balance_monthly_fees_amount')->nullable();
            $table->string('other_charges')->nullable();
            $table->string('gst_amount')->nullable();
            $table->string('paid_months')->nullable();
            $table->string('pending_months')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
            // $table->foreign('school_id')->references('id')->on('school_fee_details');
            $table->foreign('school_id')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_payments');
    }
}
