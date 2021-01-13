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
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->string('passport_no');
            $table->string('nationality');
            $table->string('state');
            $table->string('zip');
            $table->string('company_name');
            $table->string('company_country');
            $table->string('application_status');

            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')->references('id')->on('local_agents')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
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
