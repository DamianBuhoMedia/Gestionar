<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('facturas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('serviceid');
          $table->string('clientid');
          $table->string('amount');
          $table->string('observation');
          $table->string('empresa');
          $table->string('banco');
          $table->string('paymentcondition');
          $table->string('paymentform1');
          $table->string('paymentform2');
          $table->string('paymentform3');
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
        //
    }
}
