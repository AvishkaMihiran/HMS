<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_waiter_orders_table.php
public function up()
{
    Schema::create('waiter_orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('waiter_user_id');
        $table->integer('table_number');
        $table->integer('num_customers');
        $table->json('order_items'); // Use JSON to store order items
        $table->timestamps();

        $table->foreign('waiter_user_id')->references('id')->on('users'); // Adjust if using a different table for users
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waiter_orders');
    }
};
