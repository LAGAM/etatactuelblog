<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\User;
use App\Tag;

use App\Categorie;
use App\Commentaire;

class voireplusController extends Controller
{
    public function voireplus($id){

    	$data['categories'] = Categorie::all();

    	$recentArt = Article::orderBy('created_at', 'desc')->get()->take(4); 


    	$article = Article::where('id', '=', $id)->first();

        $data['articles'] = $article;

         $simArt = Article::where('categorie_id','=',$article->categorie_id)->get()->take(3);
            


        $data['commentaires'] = Commentaire::where('article_id','=', $article->id)->get();

        $user = User::where('id', '=', $article->user_id)->first();
        $data['users'] = $user;

        $categorie = Categorie::where('id','=', $article->categorie_id)->first();

        $tag = $article->tags;

         $data['alltags'] = Tag::all();
        $data['tags'] = $tag;    	

    	 return view('voireplus',compact(['recentArt','simArt','categorie']))->with($data);
    }

}
