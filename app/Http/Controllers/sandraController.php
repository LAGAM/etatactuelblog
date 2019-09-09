<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class sandraController extends Controller
{
    public function lagama($id){

    	$article = DB::table('articles')->get();
    	return view('sandra', ['articles' =>$article]);
    }
}
