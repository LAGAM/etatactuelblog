

@extends('layouts.loginbase')

  @section('contenu')

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
            <img src="{{ asset('admin/img1/info3.png')}}">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Creer un compte!</h1>
              </div>
              <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                   <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nom" class="form-control form-control-user @error('nom') is-invalid @enderror" id="nom" placeholder="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div> 
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="prenom" class="form-control form-control-user  @error('prenom') is-invalid @enderror" id="prenom" placeholder="prenom"  value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div> 
                  
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user  @error('email') is-invalid @enderror" id="email" placeholder="Entrez votre mail"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user  @error('password') is-invalid @enderror" id="password" placeholder="Mot de Passe" >
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                 <div class="col-sm-6">
                    <input type="password" name="password_confirmation" class="form-control form-control-user " id="password_confirmation" placeholder="Confirmer le mot de passe" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">Enregistrer</button>
                
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Mot de Passe oublié?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{route('login')}}">Votre compte existe déjà? connexion!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  

@endsection
