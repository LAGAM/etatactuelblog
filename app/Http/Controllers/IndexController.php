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
    

   	$article = Article::orderBy('articles.created_at', 'desc');
    $data['articles'] = $article->simplePaginate(5);
       	
	  return view('index')->with($data);

    }
}
