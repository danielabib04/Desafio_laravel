<?php

namespace App\Repositories;
use App\Models\Appointment;  
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AppointmentsFormRequest;

class EloquentAppointmentRepository implements AppointmentRepository
{
   public function add(AppointmentsFormRequest $request): Appointment
   {
            return DB::transaction(function () use ($request){
            $appointment = Appointment::create($request->all());
            return $appointment;
        });
    }
}