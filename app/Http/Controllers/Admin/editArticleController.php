<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Categorie;

class editArticleController extends Controller
{
    //
    public function editArticleForm($id){

    	$data['categories'] = Categorie::all();

    	$editArt = Article::where('id','=', $id)->first();
    	//dd($editArt);

    	return view('admin.editArticle', compact('editArt'))->with($data);
    }
}
