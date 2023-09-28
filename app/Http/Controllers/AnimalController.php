<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalsFormRequest;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Repositories\AnimalRepository;

class AnimalController extends Controller
{

    public function __construct(private AnimalRepository $repository)
    {
        
    }

    public function index(Request $request, ){
        $animals = Animal::with('owner')->get();
    
        $message_sucess = session('message.sucess');
        return view('animals.animals', compact('animals','message_sucess'));
    }

    public function create()
    {
        return view('animals/create');

    }

    public function store(AnimalsFormRequest $request)
    {   
        $animal = $this->repository->add($request);
        return redirect()->route('animals.index')->with('message.sucess',"Animal '{$animal->name}' adicionado com sucesso");
    }

    public function destroy(Animal $animal){
        $animal->delete();
        return redirect()->route('animals.index')->with('message.sucess', "Animal '{$animal->name}' removido com sucesso");
        
    }

    public function edit(Animal $animal)
    {
        return view('animals.edit')->with('animal',$animal);
    }

    public function update(Animal $animal, AnimalsFormRequest $request){
        $animal->fill($request->all());
        $animal->save();
        return redirect()->route('animals.index')->with('message.sucess', "Animal '{$animal->name}' atualizado com sucesso");

    }
}