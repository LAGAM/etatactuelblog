@extends('layouts.base')
@section('title','Edition d\'un article')

@section('content')

    <form method='POST' action="{{route('admin.editArticle', [$editArt->id])}}"  enctype="multipart/form-data">
            
        @csrf

    <div class="container">
        <div class="row">
            <div class="form-group col-md-9">  

              <label for="titre">Titre</label>
              <input type="text" name="titre" class="form-control" id="titre" aria-describedby="nomHelp" placeholder="Entrer le titre" value="{{$editArt->titre}}" required  autofocus>
              @error('titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group col-md-2" style="margin-left: 85px; margin-top: 40px;">

                <label for="ligne">Publié</label>

                <input type="checkbox" name="ligne" id="ligne" checked>
            </div>


            <div class="form-group col-md-12">

              <label for="categorie">Catégorie</label>

                <select name="categorie" class="form-control">
                  @foreach($categories as $cat)
                    <option value="{{$cat->id}}" checked="{{$editCategorie->nom}}">{{$cat->nom}}</option>
                  @endforeach
                </select>

            </div>

            <div class="form-group col-md-12">
              <label for="image" style="display: block; margin: .4rem 0;">Choisir une image:</label>
              <input type="file" class="form-control" id="image" style="margin: .4rem 0;"  name="image" accept="image/jpeg, image/png">
            </div>
            <div class="form-group col-md-6">  
              <label for="tags">Tags</label>
              
              <input type="text" name="tags" class="form-control form-control-user  @error('tags') is-valid @enderror" id="tags" aria-describedby="nomHelp" placeholder="Ajouter des tags" 
              value="<?php foreach($editArt->tags as $t){ echo $t->tag; }  ?> " required autocomplete="tags" autofocus>
              @error('tags')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
                
            <div class="form-group">
            </div>

            <div class="form-group col-md-12">

              <label for="chapeau">Chapeau</label>

                <textarea name="chapeau" class="form-control form-control-user  @error('chapeau') is-valid @enderror" id="chapeau" aria-describedby="nomHelp" placeholder="Entrer le chapeau de l'article" required autocomplete="chapeau" autofocus> {{ $editArt->chapeau }} </textarea>
                @error('chapeau')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror 

            </div>

            <div class="form-group col-md-12">

              <label for="contenu">Contenu</label>

                <textarea name="contenu" class="form-control" id="editor" aria-describedby="nomHelp" placeholder="Entrer le contenu de l'article"> {!! $editArt->contenu !!} </textarea>
                
                <script>
                  ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
                </script>

            </div>
          </div>
        </div>

       <div style="display: flex;justify-content: space-around; margin-top: 45px">
          <button class="btn btn-primary btn-user" type="submit" >Enregistrer</button>
       </div><br/><br/>
        
    </form>

    @endsection
    