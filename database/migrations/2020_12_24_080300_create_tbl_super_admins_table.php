<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSuperAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_super_admins', function (Blueprint $table) {
            $table->increments('s_Id');
            $table->string('s_code')->unique();
            $table->string('s_email')->unique();
            $table->timestamp('s_email_verified_at')->nullable();
            $table->string('s_password');
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
        Schema::dropIfExists('tbl_super_admins');
    }
}
