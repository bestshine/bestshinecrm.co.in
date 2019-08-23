<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolPaymentsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_payments_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txnid')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('school_id')->unsigned()->nullable();
            $table->integer('payment_id')->unsigned()->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('pay_id')->nullable();
            $table->string('paid_installation_amount')->nullable();
            $table->string('paid_monthly_fees_amount')->nullable();
            $table->string('other_charges_amount')->nullable();
            $table->string('concession_amount')->nullable();
            $table->string('remarks')->nullable();
            $table->string('gst_amount')->nullable();
            $table->string('paid_month')->nullable();
            $table->string('total_paid_amount')->nullable();
            $table->string('cheque_no')->nullable();
            $table->date('check_date')->nullable();
            $table->string('cheque_bank_name')->nullable();
            $table->date('payment_date')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');  
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('payment_id')->references('id')->on('school_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_payments_history');
    }
}
