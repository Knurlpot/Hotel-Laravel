<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_number',
        'room_type',
        'status',
        'price_per_night'
    ];
}
