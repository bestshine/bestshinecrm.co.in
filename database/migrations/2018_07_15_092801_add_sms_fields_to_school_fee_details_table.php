<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSmsFieldsToSchoolFeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_fee_details', function (Blueprint $table) {
            $table->string('per_sms_amount')->nullable();
            $table->integer('text_sms_count')->nullable();
            $table->integer('voice_sms_count')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_fee_details', function (Blueprint $table) {
            $table->dropColumn('per_sms_amount');
            $table->dropColumn('text_sms_count');
            $table->dropColumn('voice_sms_count');
        });
    }
}
