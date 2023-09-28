<?php

namespace App\Repositories;
use App\Models\Owner;  
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OwnersFormRequest;

class EloquentOwnerRepository implements OwnerRepository
{
   public function add(OwnersFormRequest $request): Owner
   {
            return DB::transaction(function () use ($request){
            $owner = Owner::create($request->all());
            return $owner;
        });
    }
}