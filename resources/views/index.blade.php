@extends('template')
@section('head')
<title>Accueil | Blog</title>
@endsection
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
            <ul class="breadcrumbs">
                <li class="home"><a href="index.html">Accueil</a></li>
                <li class="current">Tout les articles</li>
            </ul>
        </div>
    </div>
    <!-- /Page title and breadcrumbs -->

    <div id="main_inner" class="clearboth">
<!-- /HEADER SECTION -->

<div id="main_inner" class="clearboth">
<!-- /HEADER SECTION -->

				<div id="content" class="content_blog blog_style_b1" role="main">
			
					<article class="post_format_standard odd">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-pencil"></span></div>
							<div class="post_date"><span class="day">24</span><span class="month">Jun.</span></div>
					        <div class="post_comments"><a href="post-standard-b1.html#comments"><span class="comments_number">3</span><span class="icon-comment"></span></a></div>
			        	</div>
						<div class="title_area">
							<h1 class="post_title"><a href="post-standard-b1.html">This is a Standard post</a></h1>
						</div>
						<div class="post_info post_info_2">
							<span class="post_author">Posted by: <a href="author.html" class="post_author">John Snow</a></span>
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories:</span>
								<a class="cat_link" href="categories.html">Development</a>,
								<a class="cat_link" href="categories.html">Webdesign</a>
							</span>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="This is a Standard post" src="http://placehold.it/790x391" height="391" width="790">
						</div>
						<div class="post_content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
							eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
							minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
							ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
							voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
							dolor ..</p>
							<div class="readmore"><a href="post-standard-b1.html" class="more-link">Read more</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Clean</a>,
								<a class="tag_link" href="tags.html">Webdesign</a>
							</span>
						</div>
					</article>

					<article class="post_format_gallery even">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-camera"></span></div>
							<div class="post_date"><span class="day">30</span><span class="month">May.</span></div>
							<div class="post_comments"><a href="post-gallery-b1.html#comments"><span class="comments_number">0</span><span class="icon-comment"></span></a></div>
						</div>
						<div class="title_area">
							<h1 class="post_title"><a href="post-gallery-b1.html">Awesome Slider Post</a></h1>
						</div>
						<div class="post_info post_info_2">
							<span class="post_author">Posted by: <a href="author.html" class="post_author">John Snow</a></span>
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories:</span>
								<a class="cat_link" href="categories.html">Media</a>,
								<a class="cat_link" href="categories.html">Webdesign</a>
							</span>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="Awesome Slider Post" src="http://placehold.it/790x391" height="391" width="790">
						</div>
						<div class="post_content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
							eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
							minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
							ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
							voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
							<div class="readmore"><a href="post-gallery-b1.html" class="more-link">Read more</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Business</a>,
								<a class="tag_link" href="tags.html">Photo</a>
							</span>
						</div>
					</article>

					<article class="post_format_gallery odd">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-camera"></span></div>
							<div class="post_date"><span class="day">1</span><span class="month">May.</span></div>
							<div class="post_comments"><a href="post-gallery-b1.html#comments"><span class="comments_number">0</span><span class="icon-comment"></span></a></div>
						</div>
						<div class="title_area">
							<h1 class="post_title"><a href="post-gallery-b1.html">Another Gallery post</a></h1>
						</div>
						<div class="post_info post_info_2">
							<span class="post_author">Posted by: <a href="author.html" class="post_author">admin</a></span>
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories:</span>
								<a class="cat_link" href="categories.html">Gallery</a>,
								<a class="cat_link" href="categories.html">Media</a>,
								<a class="cat_link" href="categories.html">Webdesign</a>
							</span>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="Another Gallery post" src="http://placehold.it/790x391" height="391" width="790">
						</div>
						<div class="post_content">
							<p>Integer leo magna, adipiscing a ligula quis, tempor porta ipsum. 
							Nullam quis eros congue, tempus dui eleifend, vehicula leo. Duis 
							tincidunt justo non laoreet condimentum. Sed sit amet arcu blandit, 
							viverra nulla quis, egestas arcu. Nunc pretium vulputate neque, eget 
							pretium leo condimentum quis. Aliquam commodo leo vel mauris vulputate 
							volutpat. Suspendisse nulla ante, hendrerit ..</p>
							<div class="readmore"><a href="post-gallery-b1.html" class="more-link">Read more</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Gallery</a>,
								<a class="tag_link" href="tags.html">Webdesign</a>
							</span>
						</div>
					</article>

					<article class="post_format_audio even">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-note-beamed"></span></div>
							<div class="post_date"><span class="day">17</span><span class="month">Apr.</span></div>
							<div class="post_comments"><a href="post-audio-b1.html#comments"><span class="comments_number">0</span><span class="icon-comment"></span></a></div>
						</div>
						<div class="title_area">
							<h1 class="post_title"><a href="post-audio-b1.html">This is an Audio post</a></h1>
						</div>
						<div class="post_info post_info_2">
							<span class="post_author">Posted by: <a href="author.html" class="post_author">John Snow</a></span>
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories:</span>
								<a class="cat_link" href="categories.html">Media</a>,
								<a class="cat_link" href="categories.html">Music</a>,
								<a class="cat_link" href="categories.html">Sound</a>,
								<a class="cat_link" href="categories.html">Webdesign</a>
							</span>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="This is an Audio post" src="http://placehold.it/790x391" height="391" width="790">
						</div>
						<div class="post_content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
							accumsan pharetra ultrices. Donec euismod commodo felis, vel porttitor 
							mi luctus ac. Etiam dictum tempor semper. Praesent pellentesque sit amet
							neque iaculis viverra. In tincidunt neque eget ipsum mollis, sed 
							placerat lectus iaculis. Donec ut orci ultrices sem hendrerit volutpat 
							in sit amet odio. Etiam ut ..</p>
							<div class="readmore"><a href="post-audio-b1.html" class="more-link">Read more</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Audio</a>,
								<a class="tag_link" href="tags.html">Media</a>,
								<a class="tag_link" href="tags.html">Sound</a>
							</span>
						</div>
					</article>

					<article class="post_format_quote odd last">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-quote"></span></div>
							<div class="post_date"><span class="day">3</span><span class="month">Apr.</span></div>
							<div class="post_comments"><a href="post-quote-b1.html#comments"><span class="comments_number">0</span><span class="icon-comment"></span></a></div>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="This is a Quote post" src="http://placehold.it/790x391" height="391" width="790">
						</div>
						<div class="post_content">
							<p>Human beings, who are almost unique in having the ability to learn
							from the experience of others, are also remarkable for their apparent 
							disinclination to do so</p>
							<div class="readmore"><a href="post-quote-b1.html" class="more-link">Read more</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Quote</a>
							</span>
						</div>
					</article>

					<article class="post_format_video odd">
						<div class="post_info_1">
							<div class="post_format"><span class="icon-video"></span></div>
							<div class="post_date"><span class="day">3</span><span class="month">Mar.</span></div>
							<div class="post_comments"><a href="post-video-b1.html#comments"><span class="comments_number">0</span><span class="icon-comment"></span></a></div>
						</div>
						<div class="title_area">
							<h1 class="post_title"><a href="post-video-b1.html">This is a Video Post</a></h1>
						</div>
						<div class="post_info post_info_2">
							<span class="post_author">Posted by: <a href="author.html" class="post_author">John Snow</a></span>
							<span class="post_info_delimiter"></span>
							<span class="post_categories">
								<span class="cats_label">Categories:</span>
								<a class="cat_link" href="categories.html">Media</a>,
								<a class="cat_link" href="categories.html">Webdesign</a>
							</span>
						</div>
						<div class="pic_wrapper image_wrapper">
							<img alt="This is a Video Post" src="http://placehold.it/790x391" height="391" width="790">
						</div>
						<div class="post_content">
							<p>Etiam aliquet sapien ac rhoncus posuere. Pellentesque pharetra in 
							felis eu pretium. Maecenas auctor faucibus dignissim. Duis eleifend at 
							dolor eget rhoncus. Ut dignissim venenatis molestie. Nam tristique 
							tempus elit, sed porta turpis blandit at. Cras luctus interdum congue. 
							Etiam elementum ac enim in rhoncus. Sed vel nisi blandit nunc aliquam 
							euismod sed at neque. ..</p>
							<div class="readmore"><a href="post-video-b1.html" class="more-link">Read more</a></div>
						</div>
						<div class="post_info post_info_3 clearboth">
							<span class="post_tags">
							<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Media</a>,
								<a class="tag_link" href="tags.html">Video</a>
							</span>
						</div>
					</article>

					<!-- Pages navigation -->
					<div id="nav_pages" class="nav_pages">
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
					</div>
					<!-- /Pages navigation -->

				</div><!-- #content -->

				<!-- MAIN SIDEBAR -->
				<div id="sidebar_main" class="widget_area sidebar_main" role="complementary">
					
					<!-- Popular and Commented -->
					<!-- /Popular and Commented -->
					
					<!-- Categories -->
					<aside class="widget-number-2 widget widget_categories">
						<h3 class="widget_title">Categories</h3>
						<ul>
							<li class="cat-item"><a href="categories.html" title="View all posts filed under Design">Design</a></li>
							<li class="cat-item"><a href="categories.html" title="View all posts filed under Development">Development</a></li>
							<li class="cat-item"><a href="categories.html" title="View all posts filed under Gallery">Gallery</a></li>
							<li class="cat-item"><a href="categories.html" title="View all posts filed under Media">Media</a></li>
							<li class="cat-item"><a href="categories.html" title="View all posts filed under Music">Music</a></li>
							<li class="cat-item"><a href="categories.html" title="View all posts filed under Webdesign">Webdesign</a></li>
						</ul>
					</aside>
					<!-- /Categories -->
					
					<!-- Tags -->
					<aside class="widget-number-3 widget widget_tag_cloud">
						<h3 class="widget_title">Tags</h3>
						<div class="tagcloud">
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Audio</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Business</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Clean</a>
							<a href="tags.html" title="8 topics" style="font-size: 22pt;">Design</a>
							<a href="tags.html" title="3 topics" style="font-size: 14pt;">Gallery</a>
							<a href="tags.html" title="3 topics" style="font-size: 14pt;">Media</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Photo</a>
							<a href="tags.html" title="3 topics" style="font-size: 14pt;">Print</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Quote</a>
							<a href="tags.html" title="2 topics" style="font-size: 12pt;">SEO</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Service</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Sound</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Support</a>
							<a href="tags.html" title="3 topics" style="font-size: 14pt;">Themeforest</a>
							<a href="tags.html" title="1 topic"  style="font-size: 8pt;">Video</a>
							<a href="tags.html" title="3 topics" style="font-size: 14pt;">Webdesign</a>
							<a href="tags.html" title="8 topics" style="font-size: 22pt;">Wordpress</a>
							<a href="tags.html" title="3 topics" style="font-size: 14pt;">WP Space</a>
						</div>
					</aside>
					<!-- /Tags -->

					<!-- Recent posts -->
					<aside class="widget-number-4 widget widget_recent_posts">
						<h3 class="widget_title">Recent posts</h3>
						<div class="post_item first">
							<div class="pic_wrapper image_wrapper"><img alt="This is a Standard post" src="http://placehold.it/73x44" height="44" width="73"></div>
							<div class="post_wrapper">
								<h4 class="post_title"><a href="post-standard-b1.html">This is a Standard post</a></h4>
								<div class="post_author">By: <a href="author.html">John Snow</a></div>
								<div class="post_info">
									<span class="post_date">June 24, 2013</span>
									<span class="post_info_delimiter"></span>
									<span class="post_comments"><a href="post-standard-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">3</span></a></span>
								</div>
							</div>
						</div>
						<div class="post_item">
							<div class="pic_wrapper image_wrapper"><img alt="Awesome Slider Post" src="http://placehold.it/73x44" height="44" width="73"></div>
							<div class="post_wrapper">
								<h4 class="post_title"><a href="post-gallery-b1.html">Awesome Slider Post</a></h4>
								<div class="post_author">By: <a href="author.html">John Snow</a></div>
								<div class="post_info">
									<span class="post_date">May 30, 2013</span>
									<span class="post_info_delimiter"></span>
									<span class="post_comments"><a href="post-gallery-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">0</span></a></span>
								</div>
							</div>
						</div>
						<div class="post_item">
							<div class="pic_wrapper image_wrapper"><img alt="Another Gallery post" src="http://placehold.it/73x44" height="44" width="73"></div>
							<div class="post_wrapper">
								<h4 class="post_title"><a href="post-gallery-b1.html">Another Gallery post</a></h4>
								<div class="post_author">By: <a href="author.html">admin</a></div>
								<div class="post_info">
									<span class="post_date">May 1, 2013</span>
									<span class="post_info_delimiter"></span>
									<span class="post_comments"><a href="post-gallery-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">0</span></a></span>
								</div>
							</div>
						</div>
						<div class="post_item">
							<div class="pic_wrapper image_wrapper"><img alt="This is an Audio post" src="http://placehold.it/73x44" height="44" width="73"></div>
							<div class="post_wrapper">
								<h4 class="post_title"><a href="post-audio-b1.html">This is an Audio post</a></h4>
								<div class="post_author">By: <a href="author.html">John Snow</a></div>
								<div class="post_info">
									<span class="post_date">April 17, 2013</span>
									<span class="post_info_delimiter"></span>
									<span class="post_comments"><a href="post-audio-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">0</span></a></span>
								</div>
							</div>
						</div>
					</aside>
					<!-- /Recent posts -->
					

				</div>
				<!-- /MAIN SIDEBAR -->

<!-- FOOTER SECTION -->
			</div><!-- #main_inner -->

	    </div><!-- #main -->

@endsection