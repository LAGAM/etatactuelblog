@extends('layouts.base')
@section('title')
  <title> Admin - Tout les articles</title>

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Tout Les Articles</h6>
	</div>
	@foreach($articles as $art)


	<div class="card-body">
		<!-- <div class="my-2"></div> -->
		<a href="#" class="btn btn-light btn-icon-split" style="border: 1px solid gray;">
		    <span class="icon text-gray-600">
		      <i class="fas fa-arrow-right"></i>
		    </span>
		    <span class="text border-bottom-info" style="width: 800px;">{{$art->titre}}</span>
		    
		    <a href="#" class="btn btn-info btn-circle" style="margin-left: 10px;">
	    		<i class="fas fa-eye"></i>
		    </a>
		    <a href="#" class="btn btn-danger btn-circle" style="margin-left: 15px;">
		    	<i class="fas fa-trash"></i>
		    </a>
		</a>
	</div>
	@endforeach
</div>

	<!-- <div class="form-group form-inline">
		<p>{{$art->titre}}</p>
		<a href="#" class="btn btn-info btn-circle">
	    	<i class="fas fa-eye"></i>
	    </a><br/>
	    <a href="#" class="btn btn-danger btn-circle">
	    	<i class="fas fa-trash"></i>
	    </a>
	</div><br/><br/> -->
	
@endsection