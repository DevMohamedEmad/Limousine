<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carfeatures extends Model
{
    use HasFactory;
    protected $fillable = ['car_id' , 'feature'];
    public function car(){
        return $this->belongsTo(Car::class,);
    }
}