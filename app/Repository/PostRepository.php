<?php

namespace App\Repository;

use App\Article;

    class PostRepository
    {

        protected $article;

        public function __construct(Article $article)
        {
            $this->article = $article;
        }

      
            private function queryWithUserAndTags()
        {
            return $this->article->with('users', 'tags')
            ->orderBy('articles.created_at', 'desc');      
        }

        public function getWithUserAndTagsPaginate($n)
        {
            return $this->queryWithUserAndTags()->paginate($n);
        }

        public function getWithUserAndTagsForTagPaginate($tag, $n)
        {
            return $this->queryWithUserAndTags()
            ->whereHas('tags', function($q) use ($tag)
            {
              $q->where('tags.tag_url', $tag);
            })->paginate($n);
        }


        public function affichage(){
            return $this->article->orderBy('created_at', 'desc')->take(4)->get();
        }

        public function categorie($identifiant, $c){
            return $this->article->where('categorie_id','=',$identifiant)->orderBy('created_at', 'desc')->paginate($c);
        }

        public function store($inputs)
        {
            $this->article->create($inputs);
        }
       
}