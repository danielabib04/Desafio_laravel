<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  
use App\Http\Requests\EmployeesFormRequest; 
use App\Repositories\EmployeeRepository;
class EmployeeController extends Controller
{
    public function __construct(private EmployeeRepository $repository)
    {
        
    }

    public function index(Request $request){
        $employees = User::all();

        $message_sucess = session('message.sucess');
        return view('employees.index', compact('employees','message_sucess'));
    }

    public function create()
    {
     return view('employees/create');

    }

    public function store(EmployeesFormRequest $request)
    {   
        $employee = $this->repository->add($request);
        return redirect()->route('employees.index')->with('message.sucess',"Funcionário '{$employee->name}' adicionado com sucesso");
    }

    public function destroy(User $employee){
        $employee->delete();
        return redirect()->route('employees.index')->with('message.sucess', "Funcionário '{$employee->name}' removido com sucesso");
        
    }

    public function edit(User $employee)
    {
        return view('employees.edit')->with('employee',$employee);
    }

    public function update(User $employee, EmployeesFormRequest $request){
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index')->with('message.sucess', "Funcionário '{$employee->name}' atualizado com sucesso");

    }
}
