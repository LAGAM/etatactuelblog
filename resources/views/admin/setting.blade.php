@extends('layouts.base')
@section('title','Paramètres')
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Editer Compte Admin</h4>
            <p class="card-category">Compléter vos Informations</p>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('admin.setting')}}">

              @csrf

              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email :</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nom</label>
                    <input type="text" name="nom" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
              </div>
              <div class="row">
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ancien Mot de passe</label>
                    <input type="password" name="oldmdp" class="form-control">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nouveau mot de passe</label>
                    <input type="password" name="newmdp" class="form-control">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Confirmer le nouveau mot de passe</label>
                    <input type="password"name="newmdp1" class="form-control">
                  </div>
                </div>

              </div>
              <button type="submit" class="btn btn-primary pull-right" name="update">Mettre à jour</button>
              <div class="clearfix"></div>

            </form>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../assets/img/faces/marc.jpg" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
              Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>

@endsection