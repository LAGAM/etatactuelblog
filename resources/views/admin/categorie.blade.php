@extends('layouts.base')
    @section('content')
    <h2 style="text-align:center; color:#91278E; font-weight:bold;">Enregistrer une nouvelle categorie<h2><br>
        <form method='POST' action="{{route('admin.categorie')}}">
            
            @csrf
                        
                      
              <center>
                <div class="form-group col-md-6 col-offset-3">
                  <input type="text" name="nom" class="form-control form-control-user  @error('nom') is-valid @enderror" id="email" aria-describedby="nomHelp" placeholder="Entrer la categorie" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                  @error('nom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <button class="btn btn-primary btn-user" type="submit">Enregistrer</button>
              </center>
        </form>
    @endsection