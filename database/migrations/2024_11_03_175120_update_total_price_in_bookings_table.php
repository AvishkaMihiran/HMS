<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTotalPriceInBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Set default value for total_price
            $table->decimal('total_price', 8, 2)->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Remove default value for total_price (or revert to nullable if needed)
            $table->decimal('total_price', 8, 2)->nullable()->change();
        });
    }
}

