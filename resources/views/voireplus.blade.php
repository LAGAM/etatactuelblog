@extends('template')
@section('head')
@endsection
@section('contenu')
<div id="main" class="with_sidebar right_sidebar">
			
			<!-- Page title and breadcrumbs -->
			<div id="breadcrumbs_area">
				<div id="breadcrumbs_inner">
					<h4 class="title">Detail de l'article </h4>
					<!-- <ul class="breadcrumbs">
						<li class="home"><a href="index.html">Home</a></li>
						<li class="all"><a href="blog1.html">All Posts</a></li>
						<li class="all"><a href="categories.html">Webdesign</a></li>
						<li class="current">This is a Standard post</li>
					</ul> -->
				</div>
			</div>
			<!-- /Page title and breadcrumbs -->

			<div id="main_inner" class="clearboth">
<!-- /HEADER SECTION -->

				<div id="content" class="content_blog blog_style_b1 post_single" role="main">

					<article class="post_format_standard">

						<div class="post_info_1">
							<div class="post_format"><span class="icon-pencil"></span></div>
							<div class="post_date">
								<span class="day">{{$articles->updated_at->format('d')}}</span>
								<span class="month">{{$articles->updated_at->format('M')}}</span>
							</div>
	                        <div class="post_comments"><a href="#comments"><span class="comments_number">{{$commentaires->count()}}</span><span class="icon-comment"></span></a></div>
						</div>

						<div class="title_area">
							<h1 class="post_title"><a href="#"> {{$articles->titre}}</a></h1>
						</div>

						<div class="post_info post_info_2">
							<span class="post_author">Posté par:
								<a href="#" class="post_author">{{$users->nom}}</a>
							</span>
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories:</span>
                                    <a class="cat_link" href="#"></a>							
							</span>
						</div>

						<div class="pic_wrapper image_wrapper">
							<img alt="Image du post" src="{{ url('uploads/'.$articles->image) }}" style="width:100%; height: 100%;" height="391" width="790">
						</div>

						<div class="post_content">
							<p>{!! $articles->contenu !!}</p>
						</div>

	                    <div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								@foreach($tags as $ti)
								<a class="tag_link" href="{{ route('tagArticleListe',[$ti->tag_url,$ti->tag])}}">{{$ti->tag}}</a>,
								@endforeach
							</span>
						</div>

					</article>


					<!-- Related posts -->
					<div id="related_posts">
						
						<div class="subtitle_area">
							<h2 class="post_subtitle">Articles Similaire</h2>
						</div>
						@foreach($simArt as $sim)
						<div class="related_posts_item odd last">
							<div class="pic_wrapper image_wrapper">
								<img alt="Awesome Slider Post" src="{{ url('uploads/'.$sim->image) }}" height="160" width="260">
								<span class="image_overlay"></span>
								<a href="#" class="image_link"><span class="icon-link"></span></a>
								<a href="{{ url('uploads/'.$sim->image) }}" class="image_zoom prettyPhoto"><span class="icon-search"></span></a>
							</div>
							<div class="title_area">
								<h4 class="related_posts_title"><a href="#">{{$sim->titre}}</a></h4>
							</div>
							<div class="post_info">
								<span class="post_date">{{date('M d , Y'), strtotime($sim->updated_at)}}</span>
							</div>
						</div>
						@endforeach
					</div>
					<!-- /Related posts -->

					<!-- COMMENTS -->
					<div id="comments" class="post_comments">
	
						<!-- List of comments -->
						<div class="subtitle_area">

							<h2 class="post_subtitle">Commentaires <span>({{$commentaires->count()}})</span></h2>

						</div>
						@foreach($commentaires as $com)
						<ul class="children">
							<li id="comment-4" class="comment odd alt depth-2">
								<div class="comment_author_avatar_wrapper">
									<div class="comment_author_avatar pic_wrapper image_wrapper"><img src="template/images/user.png"></div>
								</div>
								<div class="extra_wrap">
									<div class="comment_title_area">
										<h4 class="comment_title">{{$com->nom_auteur_comment}}</h4>
									</div>
									<!-- <div class="post_info">
										<div class="comment_date"><span class="icon-clock"></span>73 days ago</div>
									</div> -->
									<div class="comment_content">
										<p>{{$com->contenu}}</p>
									</div>
								</div>
							</li>
						</ul>
						@endforeach						
						<!-- /List of comments -->
	
						<!-- Form for respond -->
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title">Laisser un commentaire <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>
							<form action="{{route('comment')}}" method="post" id="commentform" class="comment-form">

								@csrf
								<p class="comment-form-author">
									<label for="author" class="required">Nom <span class="required">(requis)</span></label>
									<input id="author" name="author" size="30" aria-required="true" type="text">
								</p>
								<p class="comment-form-comment">
									<label for="comment" class="required">Votre message <span class="required">(requis)</span></label>
									<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
								</p>
								<p class="form-submit">
									<input name="submit" id="submit" value="Envoyer" type="submit">
									<input name="comment_article_ID" value="{{$articles->id}}" id="comment_article_ID" type="hidden">
								</p>
							</form>
						</div>
						<!-- /Form for respond -->
	
						<div class="nav_comments"></div>
	
					</div>
					<!-- /COMMENTS -->
            
				</div><!-- #content -->

				<!-- MAIN SIDEBAR -->
				<div id="sidebar_main" class="widget_area sidebar_main" role="complementary">
					
					<!-- Popular and Commented -->
					
					<!-- /Popular and Commented -->
					
					<!-- Categories -->
					<aside class="widget-number-2 widget widget_categories">
						<h3 class="widget_title">Categories</h3>
						@foreach($categories as $cat)
						<ul>
							<li class="cat-item"><a href="{{route('categorieListeArticle',$cat->id)}}" title="View all posts filed under Design">{{$cat->nom}}</a></li>
							
						</ul>
						@endforeach
					</aside>
					<!-- /Categories -->
					
					<!-- Tags -->
					<aside class="widget-number-3 widget widget_tag_cloud">
						<h3 class="widget_title">Tags</h3>
						<div class="tagcloud">
							@foreach($alltags as $s)
							<a href="{{ route('tagArticleListe',[$s->tag_url,$s->tag])}}" style="font-size: 8pt;">{{$s->tag}}</a>
							@endforeach
						</div>
					</aside>
					<!-- /Tags -->

					<!-- Recent posts -->
					<aside class="widget-number-4 widget widget_recent_posts">
						<h3 class="widget_title">Articles récents</h3>
						@foreach($recentArt as $recent)
						<div class="post_item first">
							<div class="pic_wrapper image_wrapper"><img alt="This is a Standard post" src="{{ url('uploads/'.$recent->image) }}" height="44" width="73"></div>
							<div class="post_wrapper">
								<h4 class="post_title"><a href="post-standard-b1.html">{{$recent->titre}}</a></h4>
								<!-- <div class="post_author">De: <a href="author.html"></a></div> -->
								<div class="post_info">
									<span class="post_date">{{date('M d , Y'), strtotime($recent->created_at)}}</span>
									<span class="post_info_delimiter"></span>
									
								</div>
							</div>
						</div>
						@endforeach
						
					</aside>
					<!-- /Recent posts -->
					
					<!-- Archives -->
					<!-- <aside class="widget-number-5 widget widget_archive">
						<h3 class="widget_title">Archives</h3>
						<ul>
							<li><a href="#" title="June 2013">June 2013</a></li>
							<li><a href="#" title="May 2013">May 2013</a></li>
							<li><a href="#" title="April 2013">April 2013</a></li>
							<li><a href="#" title="March 2013">March 2013</a></li>
							<li><a href="#" title="February 2013">February 2013</a></li>
							<li><a href="#" title="January 2013">January 2013</a></li>
						</ul>
					</aside> -->
					<!-- /Archives -->

				</div>
				<!-- /MAIN SIDEBAR -->

<!-- FOOTER SECTION -->
			</div><!-- #main_inner -->

	    </div>

@endsection