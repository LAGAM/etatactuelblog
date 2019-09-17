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


    public function create() {
        $items = Items::where('active', true)->orderBy('nom')->pluck('nom', 'id'); 
         return view('prices.create', compact('id', 'items')); 
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
}
/*$request->all()




        
       /* 
       
       $validator = Validator::make($request->all(), [
            'titre' => ['required', 'string', 'max:255'],
            'contenu' => ['required', 'string', 'max:255'],
            'chapeau' => ['required', 'string', 'max:255'],
            'ligne' => ['required', 'integer'],
            'categorie'=> ['required', 'integer'],
            'image'=> ['image'],
        ]);
          
       $article = new Article;
       $article->titre = $request->input('titre');
       $article->contenu = $request->input('contenu');
       $article->categorie_id = $request->input('categorie');
       $article->chapeau =  $request->input('chapeau');
       $article->user_id = 1;
       $article->enligne =$request->input('ligne');
       $article->save();
        /*
        if ($validator->fails()) 
        {
            return redirect()->back()->withError($validator)->withInput();
        } else
            $imagePath = request('image')->postFormArticle('uploads', 'public');

        
          
              /*  $attributs = [
                    'titre' => $request->titre,
                    'contenu' => $request->contenu,
                    'chapeau' => $request->chapeau,
                    'enligne' => $request->ligne,
                    'user_id' =>1,
                    'image' =>$imagePath,
                   'categorie_id' =>$request->Categorie,
                    
                ];
                
         {


           $categorie = Article::create($attributs); 
       


            if ($categorie)
             {
               // flash('Opération réalisée avec succès !')->success();
                return redirect()->route('admin.dashboard');
            } else
             {
               //  flash('Opération non effectuée !')->error();
                return redirect()->route('admin.article');
            }
    }*/


