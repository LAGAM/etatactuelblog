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
        $user = User::where('id', '=', $article->user_id)->first();
        $data['users'] = $user;    	

    	 return view('voireplus')->with($data);
    }
}
