<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
    'room_title',
    'room_type',
    'description',
    'wifi',
    'price',
    'total_rooms',
    'available',
    'image'
    ];
}