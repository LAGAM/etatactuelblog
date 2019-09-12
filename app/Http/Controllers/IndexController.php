<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;
use App\Categorie;

use Carbon\Carbon;


class IndexController extends Controller
{
    //
    public function index(){


    

    $data['categories'] = Categorie::all();
    /*$art = DB::table('articles')->first('user_id');*/
    
   	$article = DB::table('articles')->orderBy('articles.created_at', 'desc')->simplePaginate(3);
   	/*$user = DB::table('users')->where('id','=', $art->user_id)->get();*/
   	
       	
	return view('index', ['articles' =>$article])->with($data);

    }
}
