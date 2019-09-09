<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Users;
use App\Categorie;

use Carbon\Carbon;


class IndexController extends Controller
{
    //
    public function index(){

/*    	$article['articles'] = Article::all();*/
       
		$data['categories'] = Categorie::all();
       	$article = DB::table('articles')->orderBy('articles.created_at', 'desc')->simplePaginate(3);
       	
   		 return view('index', ['articles' =>$article])->with($data);




    }
/*     public function perso($id){
     	$noms = DB::table('users')->get(id);
     		foreach ($noms as $nom ) {
     			if ($nom = $id ) {
     				$recup = DB::table('users')->where('id',$id)->get(nom);
     			}


     		}
     		return view('index')->with($recup);
     }*/
}
