<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');


            $table->timestamps();
            $table->unsignedBigInteger('agent_reg_id');
            $table->foreign('agent_reg_id')->references('id')->on('local_agents')->onDelete('CASCADE');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('employers')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_requests');
    }
}
