<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
class Customer extends Authenticatable implements JWTSubject
{
  
    // use Notifiable;
    // use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'password',
        'gender',

    ];
    public function orders(){
        return $this->hasMany(Order::class,'customer_id','id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
