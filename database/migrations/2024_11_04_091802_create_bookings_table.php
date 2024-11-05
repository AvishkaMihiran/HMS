<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('username'); //Aruna Username of the customer
            $table->string('room_title');
            $table->string('room_type');
            $table->integer('available')->default(5);// Package type (Full Board, Half Board, Room Only)
            $table->date('check_in_date'); // Check-in date
            $table->date('check_out_date'); // Check-out date
            $table->integer('num_rooms'); // Number of rooms booked
            $table->decimal('price'); // Total price for the booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
