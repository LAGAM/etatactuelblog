<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Article;
use App\User;
use App\Categorie;

use App\Repository\PostRepository;
use App\Http\Requests\PostRequest;

use App\Repository\TagRepository;



class ArticleController extends Controller

{
    protected $postRepository;

    

    public function __construct(PostRepository $postRepository)
	{
		$this->middleware('auth');
		

		$this->postRepository = $postRepository;
	}


   

    public function getFormArticle(){

        $data['categories'] = Categorie::all();
        return view('admin.article')->with($data);
    }
    
         

    public function postFormArticle(PostRequest $request, TagRepository $tagRepository)
    {
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file ->move('uploads', $filename );
        }else{
            $filename = '';
        }
       //  $imagePath = request('image')->postFormArticle('uploads', 'public');
        $inputs = array_merge( ['titre' =>$request->input('titre'),
         'contenu' => $request->input('contenu'),
         'chapeau'=> $request->input('chapeau'),
         'enligne'=>$request->input('ligne'),
         'image'=> $filename ,
         'categorie_id'=>$request->input('categorie'),
         'user_id' => $request->user()->id]);
    
        $essai = $request->input('tags');

        $article = Article::create($inputs);


        if(isset($essai)){
          $tagRepository->store($article, $essai);
        }
    
        return redirect(route('admin.dashboard'));
    }


    public function showAllArticle(){
      $article = Article::orderBy('articles.created_at', 'desc')->where('enligne','=', 'on');
      $data['articles'] = $article->simplePaginate(4);

      /*$artPaginate = $article->simplePaginate(5);*/

      return view('admin.allArticle')->with($data);
    }

    public function editArticleForm($id){

      $data['categories'] = Categorie::all();

      $editArt = Article::where('id','=', $id)->first();
      //dd($editArt);

      return view('admin.editArticle', compact('editArt'))->with($data);
    }

    public function update($id, Request $request, PostRepository $postRepository){
      $artUpdate = Article::where('id','=', $id)->first();
      $updating = $artUpdate->update($request->input());
      return redirect()->back();
    }

    public function delete($id){
      Article::destroy($id);

      return redirect()->back();
    }

}



