<?php

namespace App\Repositories;
use App\Models\Animal;  
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AnimalsFormRequest;

class EloquentAnimalRepository implements AnimalRepository
{
   public function add(AnimalsFormRequest $request): Animal
   {
            return DB::transaction(function () use ($request){
            $animal = Animal::create($request->all());
            return $animal;
        });
    }
}