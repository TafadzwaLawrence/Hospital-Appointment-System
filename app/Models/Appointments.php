<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'phone',
        'address',
        'reason_of_visit',
        'emergency_contact',
        'doctor',
        'booked',
        'email',
    ];
}
