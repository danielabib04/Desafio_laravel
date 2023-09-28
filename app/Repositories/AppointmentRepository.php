<?php

namespace App\Repositories;

use App\Http\Requests\AppointmentsFormRequest;
use App\Models\Appointment;

interface AppointmentRepository
{
    public function add(AppointmentsFormRequest $request): Appointment;

}