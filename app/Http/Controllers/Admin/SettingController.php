<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class SettingController extends Controller
{
    //
    public function showSetting(){
    	return view('admin.setting');
    }

    public function updateSetting(Request $request){
    	if(isset($_POST['update'])){
    		$nomUpdate = $request->input('nom');
    		$nomExist = User::where('nom','=',$nomUpdate);
    		echo "string";;
    	}
    }
}
