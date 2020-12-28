<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('responsibility');
            $table->string('jobPosition');
            $table->integer('vacancy');
            $table->string('degreeType');
            $table->string('employmentStatus');
            $table->unsignedBigInteger('categoryTypeId');
            $table->string('location');
            $table->integer('salary');
            $table->string('experience');
            $table->string('deadLine');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('employerId');
     $table->foreign('employerId')->references('id')->on('employers')->onDelete('CASCADE');
     $table->foreign('categoryTypeId')->references('id')->on('job_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
}
