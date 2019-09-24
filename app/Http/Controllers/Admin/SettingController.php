<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class SettingController extends Controller
{
    //
    public function showSetting(){
    	return view('admin.setting');
    }

    public function updateSetting(Request $request){
    	
        $attribut = array_merge([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'prenom' => $request->input('prenom'),
            'oldmdp' => Hash::make($request->input('oldmdp')),
            'mdp' => Hash::make($request->input('mdp')),
            'mdp1' => Hash::make($request->input('mdp1')),
        ]);
        
    }
}

