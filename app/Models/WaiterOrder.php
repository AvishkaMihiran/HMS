<?php

// app/Models/WaiterOrder.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaiterOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'waiter_user_id',
        'table_number',
        'num_customers',
        'order_items',
    ];

    protected $casts = [
        'order_items' => 'array', // Convert JSON to array and vice versa
    ];
}

