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
    'departure1',
    'arrival',
    'arrival1',
    'departure_date',
    'arrival_date',
    'weight',
    'price',
    'comment',
    'status',
    'departure_photo',
    'arrival_photo',
    'profile_photo',
    'id_card_photo',
    'last_deposit_day',
];


}
