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
        'package',
        'check_in_date',
        'check_out_date',
        'rooms',
        'price_list'
    ];
}
