<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;
use App\Categorie;
use App\Commentaire;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

use App\Repository\PostRepository;

class IndexController extends Controller
{

    protected $postRepository;
    protected $nbrPerPage = 4 ;
    

        public function __construct(PostRepository $postRepository)
      {
              

        $this->postRepository = $postRepository;
      }
        //
    public function index(){


    

    $data['categories'] = Categorie::all();

   	$article = Article::orderBy('articles.created_at', 'desc')->where('enligne','=', 'on');
    
    $data['articles'] = $article->Paginate(5);

    $data['users'] = User::all();
    $data['tags'] = Tag::all();
       	
    $artRecent = $article->take(4)->get();

	  return view('index',compact('artRecent'))->with($data);

    }

     public function indexTag($tag)
          {

          $data['categories'] = Categorie::all();
          $data['tags'] = Tag::all();


           $artRecent = $this->postRepository->affichage();
            $data['artRecent'] =  $artRecent;

          $articles = $this->postRepository->getWithUserAndTagsForTagPaginate($tag, $this->nbrPerPage);
          

          return view('index', compact('articles'))->with($data);
         
        }

         public function indexCategorie($id)
          {

          $data['categories'] = Categorie::all();
          $data['tags'] = Tag::all();


           $artRecent = $this->postRepository->affichage();
            $data['artRecent'] =  $artRecent;

          $articles = $this->postRepository->categorie($id, $this->nbrPerPage);
         // $art = Article::where('categorie_id', '=',$id)->take(4)->get();

          $data['articles'] = $articles;


          return view('index')->with($data);
         
        }
}
