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
}
