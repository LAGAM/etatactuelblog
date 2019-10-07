<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Email;

class EmailController extends Controller
{
    //
    public function subscribe(Request $request) {

    	$element = array_merge([
    		'emails' => $request->email,
    	]);

    	$abonnement = Email::create($element);

    	if($abonnement){
    		return redirect()->back()->with('message','Abonnement effectuer avec succes');
    	}else{
    		return redirect()->back();
    	}

    }
}
