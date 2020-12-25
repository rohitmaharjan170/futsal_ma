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
            $table->increments('f_id');
            $table->string('f_name');
            $table->string('f_owner');
            $table->bigInteger('f_mobile');
            $table->bigInteger('f_pan');
            $table->string('f_city');
            $table->string('f_district');
            $table->string('f_zone');
            $table->decimal('lattitude', 4, 4)->nullable();
            $table->decimal('longitude', 4, 4)->nullable();
            $table->string('f_email')->unique();
            $table->timestamp('f_email_verified_at')->nullable();
            $table->string('f_password');
            $table->unsignedInteger('f_role');
            $table->foreign('f_role')->references('role_id')->on('roles')->default('2');
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
