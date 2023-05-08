<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // use Notifiable;
    // use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    public function orders(){
        return $this->hasMany(Order::class,'customer_id','id');
    }
}