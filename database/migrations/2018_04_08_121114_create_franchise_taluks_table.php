<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseTaluksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchise_taluks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->integer('zone_id')->unsigned()->nullable();
            $table->integer('district_id')->unsigned()->nullable();
            $table->string('taluk_name')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
            $table->foreign('vendor_id')->references('id')->on('vendors');  
            $table->foreign('state_id')->references('id')->on('franchise_states');  
            $table->foreign('region_id')->references('id')->on('franchise_regions');  
            $table->foreign('zone_id')->references('id')->on('franchise_zones');
            $table->foreign('district_id')->references('id')->on('franchise_districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchise_taluks');
    }
}
