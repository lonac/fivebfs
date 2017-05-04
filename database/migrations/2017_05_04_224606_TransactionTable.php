<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionTable extends Migration
{
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->integer('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade');
            $table->integer('capital');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sendtransactionsId')->nullable();
            $table->string('rectransactionsId')->nullable();
            $table->date('takeDate')->nullable();
            $table->date('retDate')->nullable();
            $table->integer('takeAmount')->nullable();
            $table->integer('retAmount')->nullable();
            $table->integer('totalAmount');
            $table->string('status');
            $table->string('descriptions')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
