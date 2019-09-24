<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class AllArticleController extends Controller
{
    //
    public function showAllArticle(){
    	$article = Article::orderBy('articles.created_at', 'desc')->where('enligne','=', 'on');
    	$data['articles'] = $article->simplePaginate(4);

    	/*$artPaginate = $article->simplePaginate(5);*/

    	return view('admin.allArticle')->with($data);
    }
}
