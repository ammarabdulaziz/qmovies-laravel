<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theatres', function (Blueprint $table) {
            $table->increments('theatre_id');
            $table->string('name');
            $table->string('location');
            $table->integer('screens');
            $table->timestamps();
        });

        Schema::create('screens', function (Blueprint $table) {
            $table->increments('screen_id');
            $table->unsignedInteger('theatre_id');
            $table->string('name');
            $table->integer('total_capacity');
            $table->foreign('theatre_id')
                ->references('theatre_id')
                ->on('theatres')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('screen_seatings', function (Blueprint $table) {
            $table->increments('seating_id');
            $table->unsignedInteger('screen_id');
            $table->string('type');
            $table->string('capacity');
            $table->integer('price');
            $table->foreign('screen_id')
                ->references('screen_id')
                ->on('screens')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->increments('movie_id');
            $table->string('name');
            $table->string('description');
            $table->string('plot');
            $table->string('rating');
            $table->string('duration');
            $table->string('journer');
            $table->timestamps();
        });

        Schema::create('movie_screens', function (Blueprint $table) {
            $table->increments('movie_screen_id');
            $table->unsignedInteger('screen_id');
            $table->foreign('screen_id')
                ->references('screen_id')
                ->on('screens')
                ->onDelete('cascade');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')
                ->references('movie_id')
                ->on('movies')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('movie_screen_slots', function (Blueprint $table) {
            $table->increments('movie_screen_slot_id');
            $table->unsignedInteger('movie_screen_id');
            $table->string('day');
            $table->string('time');
            $table->foreign('movie_screen_id')
                ->references('movie_screen_id')
                ->on('movie_screens')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('name');
            $table->integer('phone');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')
                ->references('customer_id')
                ->on('customers')
                ->onDelete('cascade');
            $table->unsignedInteger('movie_screen_slot_id');
            $table->foreign('movie_screen_slot_id')
                ->references('movie_screen_slot_id')
                ->on('movie_screen_slots')
                ->onDelete('cascade');
            $table->date('movie_date');
            $table->integer('ticket_count');
            $table->integer('ticket_price');
            $table->tinyInteger('payment_status');
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
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('movie_screen_slots');
        Schema::dropIfExists('movie_screens');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('screen_seatings');
        Schema::dropIfExists('screens');
        Schema::dropIfExists('theatres');
    }
}
