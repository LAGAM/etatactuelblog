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

      

        public function store($inputs)
        {
            $this->article->create($inputs);
        }

       
}