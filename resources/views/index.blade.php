@extends('template')


@section('title', 'Accueil')


@section('contenu')

<div id="main" class="without_sidebarr with_sidebar right_sidebar">


	<!-- slider revolution-->
	<!-- START REVOLUTION SLIDER fullwidth mode -->
		<div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
			<div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;max-height:300px;height:300px;">						
				<ul>
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<img src="template/images/oaw3.png"  alt="slider-back"  data-fullwidthcentering="on">
						<!-- <div class="tp-caption lfr" data-x="433" data-y="-63" data-speed="400" data-start="800" data-easing="easeOutExpo"><img src="template/images/oaw3.png" alt="Image 1"></div> -->
						<div class="tp-caption big_red lfl" data-x="180" data-y="217" data-speed="400" data-start="2300" data-easing="easeOutExpo"></div>
						<div class="tp-caption small_black lfb" data-x="117" data-y="272" data-speed="400" data-start="2600" data-easing="easeOutExpo"></div>
						<!-- <div class="tp-caption tp-caption norma-top randomrotate" data-x="308" data-y="164" data-speed="300" data-start="1200" data-easing="easeOutExpo"></div> -->
						<!-- <div class="tp-caption tp-caption norma-bottom randomrotate" data-x="308" data-y="189" data-speed="400" data-start="1600" data-easing="easeOutExpo"></div> -->
					</li>
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<img src="template/images/espace_membre.png"  alt="slider-back"  data-fullwidthcentering="on">
						<!-- <div class="tp-caption lfr" data-x="433" data-y="-63" data-speed="400" data-start="800" data-easing="easeOutExpo"><img src="template/images/oaw3.png" alt="Image 1"></div> -->
						<div class="tp-caption big_red lfl" data-x="180" data-y="217" data-speed="400" data-start="2300" data-easing="easeOutExpo"></div>
						<div class="tp-caption small_black lfb" data-x="117" data-y="272" data-speed="400" data-start="2600" data-easing="easeOutExpo"></div>
						<!-- <div class="tp-caption tp-caption norma-top randomrotate" data-x="308" data-y="164" data-speed="300" data-start="1200" data-easing="easeOutExpo"></div>
						<div class="tp-caption tp-caption norma-bottom randomrotate" data-x="308" data-y="189" data-speed="400" data-start="1600" data-easing="easeOutExpo"></div> -->
					</li>
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<img src="template/images/OAW_2018.png"  alt="slider-back"  data-fullwidthcentering="on">
						<!-- <div class="tp-caption lfr" data-x="433" data-y="-63" data-speed="400" data-start="800" data-easing="easeOutExpo"><img src="template/images/oaw3.png" alt="Image 1"></div> -->
						<div class="tp-caption big_red lfl" data-x="180" data-y="217" data-speed="400" data-start="2300" data-easing="easeOutExpo"></div>
						<div class="tp-caption small_black lfb" data-x="117" data-y="272" data-speed="400" data-start="2600" data-easing="easeOutExpo"></div>
						<!-- <div class="tp-caption tp-caption norma-top randomrotate" data-x="308" data-y="164" data-speed="300" data-start="1200" data-easing="easeOutExpo"></div>
						<div class="tp-caption tp-caption norma-bottom randomrotate" data-x="308" data-y="189" data-speed="400" data-start="1600" data-easing="easeOutExpo"></div> -->
					</li>
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
			
			<script type="text/javascript">
				var revapi1;
				jQuery(document).ready(function() {
				
				if (jQuery.fn.cssOriginal != undefined)
					jQuery.fn.css = jQuery.fn.cssOriginal;
				
				if(jQuery('#rev_slider').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider');
				else
				   revapi1 = jQuery('#rev_slider').show().revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:450,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"js/revslider/js/videojs/",
						fullScreenOffsetContainer: ""	
					});
				
				});	//ready
			</script>
			<!-- END REVOLUTION SLIDER -->
	<!-- end slider revolution-->
			
    <!-- Page title and breadcrumbs -->
    <div id="breadcrumbs_area">
        <div id="breadcrumbs_inner">
            <h4 class="title">Tout les articles</h4>
            <!-- <ul class="breadcrumbs">
                <li class="home"><a href="index.html">Accueil</a></li>
                <li class="current">Tout les articles</li>
            </ul> -->
        </div>
    </div>
    <!-- /Page title and breadcrumbs -->

    <div id="main_inner" class="clearboth">
<!-- /HEADER SECTION -->

<div id="main_inner" class="clearboth">
<!-- /HEADER SECTION -->

				<div id="content" class="content_blog blog_style_b1" role="main">

					@foreach($articles as $article)
			
					<article class="post_format_standard odd">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-pencil"></span></div>
							<div class="post_date"><span class="day">{!! $article->created_at->format('d') !!}</span><span class="month">{!! $article->created_at->format('M') !!}</span></div>
					        <!-- <div class="post_comments"><a href="post-standard-b1.html#comments"><span class="comments_number">3</span><span class="icon-comment"></span></a></div> -->
			        	</div>
						<div class="title_area">
							<h1 class="post_title"><a href="{{route('voireplus', [$article->id])}}">{{ $article->titre }}</a></h1>
						</div>
						<div class="post_info post_info_2">
							
							<span class="post_author">Posté par:
								
								<a href="#" class="post_author">
									
								</a>
								
							</span>
							
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories: </span>
								<a class="cat_link" href="categories.html"></a>,
							</span>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="Image du post" src="{{ url('uploads/'.$article->image) }}" style="width:100%; height: 100%;" height="391" width="790">
						</div>
						<div class="post_content">
							<p>{{ $article->chapeau }}</</p>
							<div class="readmore"><a href="{{route('voireplus', [$article->id])}} " class="more-link">Lire la suite</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								@foreach($article->tags as $ot)
								<a class="tag_link" href="{{ route('tagArticleListe',[$ot->tag_url,$ot->tag])}}">{{$ot->tag}}</a>,
								@endforeach
							</span>
						</div>
					</article>
					@endforeach

					

					<!-- Pages navigation -->
					<!-- <div id="nav_pages" class="nav_pages">
						<ul>
							<li class="pager_pages"><span>Page 1 of 6</span></li>
							<li class="pager_first"><a href="#" title="&laquo; First">&laquo; First</a></li>
							<li class="pager_prev"><a href="#">&laquo;</a></li>
							<li class="pager_current"><span title="">1</span></li>
							<li><a href="#" title="2">2</a></li>
							<li><a href="#" title="3">3</a></li>
							<li><a href="#" title="4">4</a></li>
							<li><a href="#" title="5">5</a></li>
							<li class="pager_next"><a href="#">&raquo;</a></li>
							<li class="pager_last"><a href="#" title="Last &raquo;">Last &raquo;</a></li>
						</ul>
					</div -->
					<!-- /Pages navigation -->
					{{ $articles->links() }}

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
							<li class="cat-item"><a href="{{route('categorieListeArticle',$cat->id)}}" title="View all posts filed under Design">{{ $cat->nom }}</a></li>
						</ul>
						@endforeach
					</aside>
					<!-- /Categories -->
					
					<!-- Tags -->
					<aside class="widget-number-3 widget widget_tag_cloud">
						<h3 class="widget_title">Tags</h3>
						<div class="tagcloud">
							@foreach($tags as $it)
							<a href="{{ route('tagArticleListe',[$it->tag_url,$it->tag])}}" title="1 topic"  style="font-size: 8pt;">{{$it->tag}}</a>
							@endforeach
						</div>
					</aside>
					<!-- /Tags -->

					<!-- Recent posts -->
					<aside class="widget-number-4 widget widget_recent_posts">
						<h3 class="widget_title">Articles recent</h3>
						@foreach($artRecent as $recent)
						<div class="post_item first">
							<div class="pic_wrapper image_wrapper"><img alt="This is a Standard post" src="{{ url('uploads/'.$recent->image) }}" height="44" width="73"></div>
							<div class="post_wrapper">
								<h4 class="post_title"><a href="{{ route('voireplus',[$recent->id])}}">{{$recent->titre}}</a></h4>
								<!-- <div class="post_author">By: <a href="author.html">John Snow</a></div> -->
								<div class="post_info">
									<span class="post_date">{{$recent->created_at->format('d M, Y')}}</span>
									<span class="post_info_delimiter"></span>
									<!-- <span class="post_comments"><a href="post-standard-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">3</span></a></span> -->
								</div>
							</div>
						</div>
						@endforeach
					</aside>
					<!-- /Recent posts -->
					

				</div>
				<!-- /MAIN SIDEBAR -->

<!-- FOOTER SECTION -->
			</div><!-- #main_inner -->

	    </div><!-- #main -->

@endsection