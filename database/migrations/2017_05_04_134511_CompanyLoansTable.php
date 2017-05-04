<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->integer('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade');
            $table->double('amount')->default(0.0);
            $table->integer('loantime')->default(31);
            $table->string('phone');
            $table->string('reason');
            $table->string('paymeans');
            $table->string('accountname');
            $table->string('accountnumber');
            $table->string('sponsor')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
