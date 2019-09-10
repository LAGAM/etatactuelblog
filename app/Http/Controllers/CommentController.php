<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Article;
use App\User;
use App\Categorie;

use App\Repository\CommentRepository;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{

	protected $commentRepository;

    

    public function __construct(CommentRepository $commentRepository)
	{
				

		$this->commentRepository = $commentRepository;
	}


    public  function postComment(CommentRequest $request){
    	$inputs = array_merge( [
    	'nom_auteur_comment' =>$request->input('author'),
         'contenu' => $request->input('comment'),
         'article_id'=> $request->input('comment_article_ID')]);
         
     
    
        $this->commentRepository->store($inputs);
    
        return redirect()->back();

    }
}
