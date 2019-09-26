@extends('layouts.base')
@section('title','Les commentaires')

@section('content')

	<h1 class="h3 mb-2 text-gray-800">Les Commentaires</h1>
          

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
                      <th>Auteur</th>
                      <th>Contenu</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Auteur</th>
                      <th>Contenu</th>
                      <th>Options</th>                     
                    </tr>
                  </tfoot>
                  <tbody>
                       
                    <tr>
                      @foreach($commentaires as $co)
                      <td>{{$co->nom_auteur_comment}}</td>
                      <td>{{$co->contenu}}</td>
                      <td width="10%">
            						<a class="btn btn-danger btn-circle" href="{{route('admin.commentDelete', [$co->id])}}" style="margin-left: 10px;" >
            							<i class="fas fa-trash"></i>
            						</a>
                      </td> 
                      @endforeach
                      @if($commentaires->count() === 0)
                      <td class="text-danger text-center">Désolé, Aucun commentaire à afficher pour cet article</td>  
                      @endif                 
                    </tr>
                    
                  </tbody>
                </table>
                {{ $commentaires->links() }}
              </div>
            </div>
          </div>

          <!-- supression d'un articles modal -->


@endsection




<!-- <a href="#" class="btn btn-info btn-circle" style="margin-left: 10px;">
	<i class="fas fa-eye"></i>
</a>
<a href="#" class="btn btn-danger btn-circle" style="margin-left: 15px;">
	<i class="fas fa-trash"></i>
</a> -->