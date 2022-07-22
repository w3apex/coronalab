<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admin_id',
        'ref_id',
        //'time',
        'date',
        'report_status',
        'lab_tech_sign',
        'doctor_sign',
        'booking_status',
    ];

    public function user()
   {
    return $this->belongsTo(User::class);
   }
}
