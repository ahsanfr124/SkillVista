<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'city_name',
        'full_address',
        'preferred_budget',
        'problem_facing',
        'specific_date',
        'preferred_time_slot',
    ];


    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }

    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
