<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('salary');
            $table->text('interest');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('candidateId');
            $table->unsignedBigInteger('jobPostId');
            $table->foreign('candidateId')->references('id')->on('candidates')->onDelete('CASCADE');
            $table->foreign('jobPostId')->references('id')->on('job_posts')->onDelete('CASCADE');

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
        Schema::dropIfExists('job_applications');
    }
}
