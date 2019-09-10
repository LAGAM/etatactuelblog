<?php

namespace App\Repository;

use App\Commentaire;

    class CommentRepository
    {

        protected $commentaire;

        public function __construct(Commentaire $commentaire)
        {
            $this->commentaire = $commentaire;
        }

      

        public function store($inputs)
        {
            $this->commentaire->create($inputs);
        }

       
}

