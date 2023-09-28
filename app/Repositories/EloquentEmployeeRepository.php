<?php

namespace App\Repositories;
use App\Models\User;  
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EmployeesFormRequest;

class EloquentEmployeeRepository implements EmployeeRepository
{
   public function add(EmployeesFormRequest $request): User
   {
            return DB::transaction(function () use ($request){
            $user = User::create($request->all());
            return $user;
        });
    }
}