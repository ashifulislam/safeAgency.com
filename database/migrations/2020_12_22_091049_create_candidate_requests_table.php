<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            //foreign key of candidate
            //foreign key of agent
//            $table->unsignedBigInteger('agent_reg_id');
//            $table->foreign('agent_reg_id')->references('id')->on('local_agents')->onDelete('CASCADE');
            $table->unsignedBigInteger('agent_reg_id');
            $table->foreign('agent_reg_id')->references('id')->on('local_agents')->onDelete('CASCADE');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('CASCADE');
            $table->unsignedBigInteger('package_type_id');
            $table->foreign('package_type_id')->references('id')->on('package_lists')->onDelete('CASCADE');
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
        Schema::dropIfExists('candidate_requests');
    }
}
