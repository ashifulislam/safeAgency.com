<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_applies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->string('place_of_birth');
            $table->string('data_of_birth');
            $table->string('position_field');
            $table->string('passport_no');
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')->references('id')->on('local_agents')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('visa_applies');
    }
}
