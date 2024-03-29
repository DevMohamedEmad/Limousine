<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'description' , 'category_id'];

    public function photos(){
        return $this->hasMany(Carphoto::class,);
    }

    public function category(){
        return $this->belongsTo(Category::class,);
    }
}
