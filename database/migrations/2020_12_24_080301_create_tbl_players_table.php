<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_players', function (Blueprint $table) {
            $table->increments('p_id');
            $table->string('p_first_name');
            $table->string('p_middle_name');
            $table->string('p_last_name');
            $table->bigInteger('p_mobile');
            $table->string('p_city');
            $table->string('p_district');
            $table->string('p_zone');
            $table->string('p_email')->unique();
            $table->timestamp('p_email_verified_at')->nullable();
            $table->string('p_password');
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
        Schema::dropIfExists('tbl_players');
    }
}
