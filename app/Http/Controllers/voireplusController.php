<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\User;
use App\Categorie;
use App\Commentaire;

class voireplusController extends Controller
{
    public function voireplus($id){

    	$data['categories'] = Categorie::all();
    	$article = Article::where('id', '=', $id)->first();
        $data['articles'] = $article;
        $data['commentaires'] = Commentaire::where('article_id','=', $article->id)->get();

    	/*dd($commentaires);*/
    	
    	$user = User::where('id', '=', $article->user_id)->get();
    	/* $categorie = DB::table('categories')->where('id', '=', $article->categorie_id)->get('nom'); */

    	

    	 return view('voireplus')->with($data);
    }
}
