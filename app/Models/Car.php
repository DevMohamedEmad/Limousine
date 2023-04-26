<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'description'];

    public function photos(){
        return $this->hasMany(Carphoto::class,);
    }

    public function features(){
        return $this->hasMany(Carfeatures::class,);
    }
}
