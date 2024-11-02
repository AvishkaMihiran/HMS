<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Order extends Model
{
    protected $fillable = ['item_name', 'price', 'quantity', 'total', 'user_id'];

    // Define relationship to User model
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
