<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->double('amount');
            $table->string('address');
            $table->string('payment_status');
            $table->string('transaction_id');
            $table->string('currency');
            $table->string('country');
            $table->string('zip');
            $table->string('state');

            $table->unsignedBigInteger('candidate_id');

            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('CASCADE');
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
        Schema::dropIfExists('orders');
    }
}
