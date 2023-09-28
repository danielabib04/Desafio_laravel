<?php

namespace App\Repositories;

use App\Http\Requests\AnimalsFormRequest;
use App\Models\Animal;

interface AnimalRepository
{
    public function add(AnimalsFormRequest $request): Animal;

}