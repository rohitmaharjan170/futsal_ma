<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bookings', function (Blueprint $table) {
            $table->increments('b_id');
            $table->unsignedInteger('b_d_id');
            $table->foreign('b_d_id')->references('d_id')->on('tbl_dates');
            $table->unsignedInteger('b_day_id');
            $table->foreign('b_day_id')->references('day_id')->on('tbl_days');
            $table->unsignedInteger('b_t_id');
            $table->foreign('b_t_id')->references('t_id')->on('tbl_timeslots');
            $table->unsignedInteger('b_p_id');
            $table->foreign('b_p_id')->references('p_id')->on('tbl_players');
            $table->unsignedInteger('b_f_id');
            $table->foreign('b_f_id')->references('f_id')->on('tbl_futsal_admins');
            $table->unsignedInteger('b_bs_id');
            $table->foreign('b_bs_id')->references('bs_id')->on('tbl_booking_statuses');
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
        Schema::dropIfExists('tbl_bookings');
    }
}
