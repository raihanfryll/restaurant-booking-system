<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookingNo',
        'fullName',
        'emailId',
        'phoneNumber',
        'bookingDate',
        'bookingTime',
        'noAdults',
        'noChildrens',
        'tableId',
        'adminremark',
        'boookingStatus',
    ];
}
