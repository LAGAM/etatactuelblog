<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class AllArticleController extends Controller
{
    //
    public function showAllArticle(){
    	$data['articles'] = Article::all();

    	return view('admin.allArticle')->with($data);
    }
}
