<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Animal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','specie','breed','treatments','birthDate','owner_id'];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    protected static function booted(){
        self::addGlobalScope(function(Builder $queryBuilder){
            $queryBuilder->orderBy('name');
        });
    }

}