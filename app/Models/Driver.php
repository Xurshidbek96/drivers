<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function car(){ return $this->hasOne(Car::class); }
    public function rating(){ return $this->hasOne(Rating::class); }
}