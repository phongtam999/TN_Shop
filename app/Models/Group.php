<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{
    protected $table ='groups';
    use SoftDeletes;
    use HasFactory;
    use Notifiable;
    protected $fillable = ['name'];
    public function users()
    {
        return $this->hasMany(User::class, 'group_id', 'id');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class,'group_role','group_id','role_id');
    }
}
