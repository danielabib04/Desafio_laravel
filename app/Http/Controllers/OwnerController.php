<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;  
use App\Http\Requests\OwnersFormRequest; 
use App\Repositories\OwnerRepository;

class OwnerController extends Controller
{
    public function __construct(private OwnerRepository $repository)
    {
        
    }

    public function index(Request $request){
        $owners = Owner::all();

        $message_sucess = session('message.sucess');
        return view('owners.index', compact('owners','message_sucess'));
    }

    public function create()
    {
     return view('owners/create');

    }

    public function store(OwnersFormRequest $request)
    {   
        $owner = $this->repository->add($request);
        return redirect()->route('owners.index')->with('message.sucess',"Proprietário '{$owner->fullName}' adicionado com sucesso");
    }

    public function destroy(Owner $owner){
        $owner->delete();
        return redirect()->route('owners.index')->with('message.sucess', "Proprietário '{$owner->fullName}' removido com sucesso");
        
    }

    public function edit(Owner $owner)
    {
        return view('owners.edit')->with('owner',$owner);
    }

    public function update(Owner $owner, OwnersFormRequest $request){
        $owner->fill($request->all());
        $owner->save();
        return redirect()->route('owners.index')->with('message.sucess', "Proprietário '{$owner->fullName}' atualizado com sucesso");

    }
}
