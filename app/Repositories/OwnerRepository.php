<?php

namespace App\Repositories;

use App\Http\Requests\OwnersFormRequest;
use App\Models\Owner;

interface OwnerRepository
{
    public function add(OwnersFormRequest $request): Owner;

}