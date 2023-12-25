<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    protected $fillable = ['title', 'description', 'service_category', 'price_rate', 'city_name', 'address', 'image', 'tags', 'user_id'];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
