


@extends('layouts.base')

@section('content')

    <form method='POST' action="{{route('admin.article')}}"  enctype="multipart/form-data">
            
        @csrf

    <div class="container">
        <div class="row">
            <div class="form-group col-md-9">  

              <label for="titre">Titre</label>
              <input type="text" name="titre" class="form-control form-control-user  @error('titre') is-valid @enderror" id="titre" aria-describedby="nomHelp" placeholder="Entrer le titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus>
              @error('titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group col-md-2" style="margin-left: 85px; margin-top: 40px;">

                <label for="ligne">Publié</label>

                <input type="number" name="ligne" id="ligne" class="">
            </div>


            <div class="form-group col-md-12">

              <label for="categorie">Catégorie</label>

                <select name="categorie" class="form-control">
                  <option value="">Selectionnez une valeur</option>
                  @foreach($categories as $cat)
                    <option value="{{ $cat->nom }}">{{ $cat->nom }}</option>
                  @endforeach   
                </select>

            </div>

            <div class="form-group col-md-12">
              <label for="image" style="display: block; margin: .4rem 0;">Choisir une image:</label>
              <input type="file" class="form-control" id="image" style="margin: .4rem 0;" name="image" accept="image/jpeg, image/png">
            </div>
            <!-- <div class="form-group col-md-6">  

              <label for="tags">Tags</label>
              <input type="text" name="tags" class="form-control form-control-user  @error('tags') is-valid @enderror" id="tags" aria-describedby="nomHelp" placeholder="Ajouter des tags" value="{{ old('tags') }}" required autocomplete="tags" autofocus>
              @error('tags')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div> -->
                
            <div class="form-group">
            </div>

            <div class="form-group col-md-12">

              <label for="chapeau">Chapeau</label>

                <textarea name="chapeau" class="form-control form-control-user  @error('chapeau') is-valid @enderror" id="chapeau" aria-describedby="nomHelp" placeholder="Entrer le chapeau de l'article" value="{{ old('chapeau') }}" required autocomplete="chapeau" autofocus></textarea>
                @error('chapeau')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror 

            </div>

            <div class="form-group col-md-12">

              <label for="contenu">Contenu</label>

                <textarea name="contenu" class="form-control form-control-user  @error('contenu') is-valid @enderror" id="contenu" aria-describedby="nomHelp" placeholder="Entrer le contenu de l'article" value="{{ old('contenu') }}"></textarea>

                <script>
                  ClassicEditor
                      .create( document.querySelector( '#contenu' ) )
                      .then( editor => {
                          console.log( editor );
                      } )
                      .catch( error => {
                          console.error( error );
                      } );
                </script>

            </div>
          </div>
        </div>

        <button class="btn btn-primary btn-user" type="submit">Enregistrer</button>
        
    </form>

    @endsection
    