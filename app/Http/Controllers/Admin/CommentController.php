<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Commentaire;

class CommentController extends Controller
{
    //
    public function showComment(){
    	$data['commentaires'] = Commentaire::all();

    	return view('admin.comment')->with($data);
    }

    public function commentListById($id){
    	$comList = Commentaire::orderBy('created_at', 'desc')->where('article_id','=', $id);
    	$data['commentaires'] = $comList->simplePaginate(10);

    	return view('admin.commentListById')->with($data);
    }

    public function commentDelete($id){
      Commentaire::destroy($id);

      return redirect()->back();
    }
}
