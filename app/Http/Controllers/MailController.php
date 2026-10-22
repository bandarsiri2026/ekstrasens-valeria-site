<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactUSRequest;
use App\Mail\mailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mailcontroller extends Controller
{
    public function send_form(contactUSRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $telephone = $request->telephone;
        $msg = $request->msg;
        Mail::to('ekstrasens-valeria@ekstrasens-valeria.com.ua')->send(new mailClass($name, $email, $telephone, $msg));
        session()->flash('success' , 'Спасибо вам письмо отправлено');
        return redirect()->back();

    }
}
