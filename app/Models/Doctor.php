<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'image', 'name', 'designation', 'specialization', 'contact', 'email'
    ];

    public function schedule()
    {
        return $this->hasOne(DoctorSchedule::class, 'doctor_id');
    }
}
