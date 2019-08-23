<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchise_regions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->string('region_name')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
            $table->foreign('vendor_id')->references('id')->on('vendors');  
            $table->foreign('state_id')->references('id')->on('franchise_states');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchise_regions');
    }
}
