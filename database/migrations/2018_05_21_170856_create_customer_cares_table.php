<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('track_id')->nullable();
            $table->integer('school_id')->unsigned()->nullable();
            $table->string('school_email')->nullable();
            $table->string('category')->nullable();
            $table->string('subject')->nullable();
            $table->string('description')->nullable();
            $table->string('priority')->nullable();
            $table->string('images')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_deleted')->default(0);             
            $table->timestamps();
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
        Schema::dropIfExists('customer_cares');
    }
}
