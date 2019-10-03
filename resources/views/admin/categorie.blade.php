@extends('layouts.base')
@section('title', 'Catégorie')
@section('content')
    <a href=javascript:history.go(-1)  class="btn btn-warning btn-circle"> <i class="fas fa-arrow-circle-left fa-2x info"></i> </a><br/><br/>
    <h1 class="h3 mb-4 text-gray-800">Catégories</h1>

          <div class="row">

            <div class="col-lg-6">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Liste des catégories</h6>
                </div>
                <div class="card-body">
                  
                  <!-- Circle Buttons (Default) -->


                  <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($categories as $cat)   
                    <tr>
                      <td>{{$cat->id}}</td>
                      <td>{{$cat->nom}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  
                </div>
              </div>

            </div>

            <div class="col-lg-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter une catégorie</h6>
                </div>
                
                  <form method='POST' action="{{route('admin.categorie')}}">
            
                    @csrf
                        
                      
                        <center><br/><br/>
                          <div class="form-group col-md-10">
                            <input type="text" name="nom" class="form-control form-control-user  @error('nom') is-valid @enderror" id="email" aria-describedby="nomHelp" placeholder="Entrer la categorie" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                            @error('nom')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <button class="btn btn-primary btn-user" type="submit">Enregistrer</button><br/><br/>
                        </center>
                  </form>
                  
                </div>
              </div>

            </div>

            <footer class="sticky-footer bg-gray-200">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2019</span>
                </div>
              </div>
            </footer>

          </div>









    <!-- <h2 style="text-align:center; color:#91278E; font-weight:bold;">Enregistrer une nouvelle categorie<h2><br> -->
        
    @endsection