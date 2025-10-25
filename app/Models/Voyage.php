<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'phone',
        'whatsapp',
        'email',
        'departure',
        'arrival',
        'departure_date',
        'arrival_date',
        'weight',
        'price',
        'comment',
        'status',
    ];
}
