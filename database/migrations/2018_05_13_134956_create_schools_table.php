<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_id')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('contact_no_optional')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('school_category')->nullable();
            $table->string('plan_type')->nullable();
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->integer('zone_id')->unsigned()->nullable();
            $table->integer('district_id')->unsigned()->nullable();
            $table->integer('taluk_id')->unsigned()->nullable();
            $table->integer('assign_emp_id')->unsigned()->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');  
            $table->foreign('vendor_id')->references('id')->on('vendors');  
            $table->foreign('state_id')->references('id')->on('franchise_states');  
            $table->foreign('region_id')->references('id')->on('franchise_regions');  
            $table->foreign('zone_id')->references('id')->on('franchise_zones');
            $table->foreign('district_id')->references('id')->on('franchise_districts');
            $table->foreign('taluk_id')->references('id')->on('franchise_taluks'); 
            $table->foreign('assign_emp_id')->references('id')->on('employers');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
