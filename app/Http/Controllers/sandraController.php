<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\User;
use App\Categorie;
use App\Commentaire;

class sandraController extends Controller
{
    public function lagama($id){

    	$data['categories'] = Categorie::all();
    	$article = DB::table('articles')->where('id', '=', $id)->first();
    	$commentaires['commentaires'] = Commentaire::all()->where('article_id', '=', $article->id)->first();
    	/*dd($commentaires);*/
    	
    	$user = DB::table('users')->where('id', '=', $article->user_id)->get();
    	/* $categorie = DB::table('categories')->where('id', '=', $article->categorie_id)->get('nom'); */

    	

    	 return view('sandra', ['articles'=> $article], ['users'=> $user], ['commentaires'=> $commentaires])->with($data);
    }
}
