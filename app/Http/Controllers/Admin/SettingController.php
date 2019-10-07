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
    	
        
        
        $user = auth()->user()->password;
        $inputPassword = request('oldmdp');
        if(password_verify($inputPassword, $user)){
            $mdp = request('newmdp');
            $mdp1 = request('newmdp1');
            if($mdp === $mdp1){
                $userUpdate = User::where('nom','=',auth()->user()->nom)->update([
                    'nom' => $request->input('nom'),
                    'prenom' => $request->input('prenom'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($mdp1),
                ]);
                if(isset($userUpdate)){
                    return redirect(route('admin.dashboard'))->with('message','Les parametres d\'administration ont bien été modifié');
                }
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
        
    }
}

