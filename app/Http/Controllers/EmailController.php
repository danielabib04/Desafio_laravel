<?php

namespace App\Http\Controllers;

use App\Mail\AnnounceToOwners;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
        return view('mails.create');
    }

    public function create(){
        $message_sucess = session('message.sucess');
        return view('mails.create',compact('message_sucess'));
    }

    public function store(Request $request){

        $owners = Owner::all();
        foreach($owners as $index => $owner){
        $email = new AnnounceToOwners(
            $owner->fullName,
            $request->informations,
            $request->subject,
        );
        $whenToSend = now()->addSeconds($index *5);
        Mail::to($owner)->later($whenToSend, $email);
        }

        return redirect()->route('mails.create')->with('message.sucess', "Emails enviados com sucesso");
    }
}
