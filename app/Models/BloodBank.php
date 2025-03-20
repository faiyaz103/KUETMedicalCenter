<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'phone',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
