<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','animal_id','breed','treatments','cost','owner_id','startTime','endTime'];
    public function animal(){
       return $this->belongsTo(Animal::class); 
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function prescriptions(){
        return $this->hasMany(Prescription::class);
    }

    protected static function booted(){
        self::addGlobalScope(function(Builder $queryBuilder){
            $queryBuilder->orderBy('endTime');
        });
    }
}
