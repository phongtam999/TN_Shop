<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    // public function products(){
    // return $this->hasMany(Product::class, 'category_id','id');
    protected $fillable = ['id','name'];

    // public function scopeSearch($query, $term)
    // {
    //     if ($term) {
    //         $query->where('name', 'like', '%' . $term . '%')
    //             ->orWhere('id', 'like', '%' . $term . '%');
    //     }
    //     return $query;
    // }

   
}
 


