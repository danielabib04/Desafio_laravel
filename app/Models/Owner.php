<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Owner extends Model
{
    use HasFactory;
    protected $fillable = ['fullName','address','telephone','email','birthDate'];

    public function animals(){
        return $this->hasMany(Animal::class);
    }

    protected static function booted(){
        self::addGlobalScope(function(Builder $queryBuilder){
            $queryBuilder->orderBy('fullName');
        });
    }
}
