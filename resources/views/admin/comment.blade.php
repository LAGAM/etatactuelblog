@extends('layouts.base')
@section('title','Commentaires')

@section('content')
  <a href=javascript:history.go(-1)  class="btn btn-info btn-circle"> <i class="fas fa-arrow-circle-left fa-2x info"></i> </a><br/><br/>
	<h1 class="h3 mb-2 text-gray-800">Commentaires</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tableau des commentaires</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>auteurs</th>
                      <th>Commentaires</th>
                      <th>article_id</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>auteurs</th>
                      <th>Commentaires</th>
                      <th>article_id</th>                     
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($commentaires as $comment)   
                    <tr>
                      <td>{{$comment->nom_auteur_comment}}</td>
                      <td>{{$comment->contenu}}</td>
                      <td>{{$comment->article_id}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection