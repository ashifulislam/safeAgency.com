<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('age');
            $table->string('skill');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('interest');

            $table->string('type')->default('user');
            $table->mediumText('bio')->nullable();
            $table->string('about');
            $table->string('photo')->default('profile.png');


            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('agent_reg_id');
            $table->foreign('agent_reg_id')->references('id')->on('local_agents')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents_profiles');
    }
}
