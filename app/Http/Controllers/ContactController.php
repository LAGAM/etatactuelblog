<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    //
    public function contact(Request $request){
    	$element = array_merge([
    		'nom' => $request->nom,
    		'email' => $request->email,
    		'message' => $request->message,
    	]);

    	$contact = Contact::create($element);

    	if($contact){
    		return redirect()->back()->with('message','Votre message a bien été pris en compte');
    	}else{
    		return redirect()->back();
    	}
    }
}
