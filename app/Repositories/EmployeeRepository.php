<?php

namespace App\Repositories;

use App\Http\Requests\EmployeesFormRequest;
use App\Models\User;

interface EmployeeRepository
{
    public function add(EmployeesFormRequest $request): User;

}