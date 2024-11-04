<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'username',
        'room_title',
        'room_type',
        'available',
        'check_in_date',
        'check_out_date',
        'num_rooms',
        'price'
    ];
}
