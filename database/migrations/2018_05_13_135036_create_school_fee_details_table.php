<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolFeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_fee_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->integer('school_id')->unsigned()->nullable();
            $table->date('agreement_date')->nullable();
            $table->string('stamp_no')->nullable();
            $table->string('agreement_sign')->nullable();
            $table->string('installation_total_amount')->nullable();
            $table->string('student_strength')->nullable();
            $table->date('payment_start_month')->nullable();
            $table->date('payment_end_month')->nullable();
            $table->string('monthly_fees')->nullable();
            $table->string('gst_percentage')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
            $table->foreign('vendor_id')->references('id')->on('vendors');  
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
        Schema::dropIfExists('school_fee_details');
    }
}
