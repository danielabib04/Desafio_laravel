<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Requests\AppointmentsFormRequest; 
use App\Repositories\AppointmentRepository;


class AppointmentController extends Controller
{
    public function __construct(private AppointmentRepository $repository)
    {
        
    }

    public function index(Request $request){
        $appointments = Appointment::all();

        $message_sucess = session('message.sucess');
        return view('appointments.index', compact('appointments','message_sucess'));
    }

    public function create()
    {
     return view('appointments/create');

    }

    public function store(AppointmentsFormRequest $request)
    {   
        $appointment = $this->repository->add($request);
        return redirect()->route('appointments.index')->with('message.sucess',"Consulta '{$appointment->id}' adicionada com sucesso");
    }

    public function destroy(Appointment $appointment){
        $appointment->delete();
        return redirect()->route('appointments.index')->with('message.sucess', "Consulta '{$appointment->id}' removida com sucesso");
        
    }

    public function edit(Appointment $appointment)
    {
        return view('appointments.edit')->with('appointment',$appointment);
    }

    public function update(Appointment $appointment, AppointmentsFormRequest $request){
        $appointment->fill($request->all());
        $appointment->save();
        return redirect()->route('appointments.index')->with('message.sucess', "Consulta '{$appointment->fullName}' atualizado com sucesso");

    }
}
