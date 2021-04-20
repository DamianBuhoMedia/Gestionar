<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TramitesNacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tramites_nacion', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('empresa');
          $table->string('expediente');
          $table->string('tramite');
          $table->date('inicio');
          $table->date('c1');
          $table->string('c2');
          $table->string('c3');
          $table->date('c4');
          $table->string('c5');
          $table->string('c6');
          $table->string('c7');
          $table->string('c8');
          $table->date('c9');
          $table->date('c10');
          $table->date('c11');
          $table->date('c12');
          $table->date('c13');
          $table->string('c14');
          $table->string('c15');
          $table->date('c16');
          $table->string('c17');
          $table->string('c18');
          $table->string('c19');
          $table->string('c20');
          $table->string('c21');
          $table->string('c22');
          $table->string('c23');
          $table->string('c24');
          $table->string('c25');
          $table->date('c26');
          $table->date('c27');
          $table->string('c28');
          $table->date('c29');
          $table->string('c30');
          $table->string('c31');
          $table->string('c32');
          $table->date('c33');
          $table->date('c34');
          $table->string('c35');
          $table->string('c36');
          $table->date('c37');
          $table->string('c38');
          $table->string('c39');
          $table->date('c40');
          $table->date('c41');
          $table->string('c42');
          $table->date('c43');
          $table->string('c44');
          $table->string('c45');
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
