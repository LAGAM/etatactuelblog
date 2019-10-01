@extends('layouts.base')
@section('title','Tous les Articles')

@section('content')
  <a href=javascript:history.go(-1)  class="btn btn-warning btn-circle"> <i class="fas fa-arrow-circle-left fa-2x info"></i> </a><br/><br/>
	<h1 class="h3 mb-2 text-gray-800">Les Articles</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tableau des articles</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Chapeau</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Chapeau</th>
                      <th>Options</th>                     
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($articles as $article)   
                    <tr>
                      <td>{{$article->id}}</td>
                      <td>{{$article->titre}}</td>
                      <td>{{$article->chapeau}}</td>
                      <td width="20%">
                      	<a href="{{route('admin.editArticle', [$article->id])}}" class="btn btn-info btn-circle" style="margin-left: 10px;">
            							<i class="fas fa-pencil-alt"></i>
            						</a>
            						<a class="btn btn-danger btn-circle" onclick="return confirm('Voulez vous vraiment supprimer cet article ?')" href="{{route('admin.delete', [$article->id])}}" style="margin-left: 10px;" >
            							<i class="fas fa-trash"></i>
            						</a>
                        <script>
                          $(".delete").on("submit", function(){
                              return confirm("Are you sure?");
                          });
                      </script>
                        <a href="{{route('admin.commentListById', [$article->id])}}" class="btn btn-warning btn-circle" style="margin-left: 10px;" >
                          <i class="fas fa-fw fa-comment-alt"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $articles->links() }}
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