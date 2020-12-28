<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_type');
            $table->unsignedBigInteger('agent_reg_id');
            $table->foreign('agent_reg_id')->references('id')->on('local_agents')->onDelete('CASCADE');
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
        Schema::dropIfExists('package_lists');
    }
}
