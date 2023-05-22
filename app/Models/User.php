<?php

namespace App\Models;

use App\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Tymon\JWTAuth\Contracts\JWTSubject;


use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{   use Notifiable;
    use HasApiTokens, HasFactory, Notifiable, HasPermissions;
    // use SoftDeletes;

    protected $table = 'users';
    // protected $fillable = [
    //     'image',
    //     'name',
    //     'phone',
    // ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
   protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id', 'id');
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