<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFutsalAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_futsal_admins', function (Blueprint $table) {
            $table->increments('f_sn');
            $table->unsignedInteger('f_u_id');
            $table->foreign('f_u_id')->references('id')->on('users');
            $table->string('f_name');
            $table->string('f_owner');
            $table->bigInteger('f_mobile');
            $table->bigInteger('f_pan');
            $table->string('f_city');
            $table->string('f_district');
            $table->string('f_zone');
            $table->double('f_lattitude', 8, 4)->nullable();
            $table->double('f_longitude', 8, 4)->nullable();
            $table->string('f_u_email');
            $table->foreign('f_u_email')->references('email')->on('users');
            $table->string('f_u_password');
            $table->rememberToken();
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
        Schema::dropIfExists('tbl_futsal_admins');
    }
}
