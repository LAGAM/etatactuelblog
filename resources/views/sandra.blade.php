@extends('template')
@section('head')
@endsection
@section('contenu')
<div id="main" class="with_sidebar right_sidebar">
			
			<!-- Page title and breadcrumbs -->
			<div id="breadcrumbs_area">
				<div id="breadcrumbs_inner">
					<h4 class="title">Detail de l'article {{ $id }}</h4>
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
							<div class="post_date"><span class="day">24</span><span class="month">Jun.</span></div>
	                        <div class="post_comments"><a href="#comments"><span class="comments_number">3</span><span class="icon-comment"></span></a></div>
						</div>

						<div class="title_area">
							<h1 class="post_title"><a href="#">{{ $article->titre }}</a></h1>
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
							<img alt="Image du post" src="{{ url('uploads/'.$article->image) }}" style="width:100%; height: 100%;" height="391" width="790">
						</div>

						<div class="post_content">
							<p>{{ $article->contenu }}</</p>
						</div>

	                    <div class="post_info post_info_3 clearboth">
							<span class="post_tags">
								<span class="tags_label">Tags:</span>
								<a class="tag_link" href="tags.html">Clean</a>,
								<a class="tag_link" href="tags.html">Webdesign</a>
							</span>
						</div>

						<div class="post_social">
							<span class="social_label">Share this Story</span><!--
							--><a href="#" class="social dribbble" target="_blank"><span class="icon-dribbble"></span></a><!--
							--><a href="#" class="social linkedin" target="_blank"><span class="icon-linkedin"></span></a><!--
							--><a href="#" class="social gplus" target="_blank"><span class="icon-gplus"></span></a><!--
							--><a href="#" class="social twitter" target="_blank"><span class="icon-twitter"></span></a><!--
							--><a href="#" class="social facebook" target="_blank"><span class="icon-facebook"></span></a>
						</div>

						<div class="post_author_details">
							<div class="post_author_avatar_wrapper">
								<div class="post_author_avatar pic_wrapper image_wrapper"><a href="author.html"><img alt="" src="http://placehold.it/50x50" class="avatar avatar-50 photo" height="50" width="50"></a></div>
							</div>
							<div class="extra_wrap">
								<h3 class="author_name"><a href="author.html"><span>About the Author</span></a></h3>
								<div class="author_description"><p>Etiam ut mattis orci, a 
									tristique risus. Praesent scelerisque eu urna quis scelerisque. Aenean 
									ut leo mattis, aliquet tellus in, placerat risus. Curabitur ultrices 
									imperdiet convallis. Nam scelerisque, augue at feugiat cursus, lorem 
									justo hendrerit justo, et mattis enim diam vel ipsum.</p>
								</div>
							</div>	
						</div>

					</article>


					<!-- Related posts -->
					<div id="related_posts">
						
						<div class="subtitle_area">
							<h2 class="post_subtitle">Related posts</h2>
						</div>
						
						<div class="related_posts_item odd first">
							<div class="pic_wrapper image_wrapper">
								<img alt="Awesome Slider Post" src="http://placehold.it/260x160" height="160" width="260">
								<span class="image_overlay"></span>
								<a href="post-gallery-b1.html" class="image_link"><span class="icon-link"></span></a>
								<a href="http://placehold.it/790x391" class="image_zoom prettyPhoto"><span class="icon-search"></span></a>
							</div>
							<div class="title_area">
								<span class="post_comments"><a href="post-gallery-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">0</span></a></span>
								<h4 class="related_posts_title"><a href="post-gallery-b1.html">Awesome Slider Post</a></h4>
							</div>
							<div class="post_info">
								<span class="post_date">May 30, 2013</span>
							</div>
						</div>

						<div class="related_posts_item even">
							<div class="pic_wrapper image_wrapper">
								<img alt="Another Gallery post" src="http://placehold.it/260x160" height="160" width="260">
								<span class="image_overlay"></span>
								<a href="post-gallery-b1.html" class="image_link"><span class="icon-link"></span></a>
								<a href="http://placehold.it/790x391" class="image_zoom prettyPhoto"><span class="icon-search"></span></a>
							</div>
							<div class="title_area">
								<span class="post_comments"><a href="post-gallery-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">0</span></a></span>
								<h4 class="related_posts_title"><a href="post-gallery-b1.html">Another Gallery post</a></h4>
							</div>
							<div class="post_info">
								<span class="post_date">May 1, 2013</span>
							</div>
						</div>

						<div class="related_posts_item odd last">
							<div class="pic_wrapper image_wrapper">
								<img alt="This is an Audio post" src="http://placehold.it/260x160" height="160" width="260">
								<span class="image_overlay"></span>
								<a href="post-audio-b1.html" class="image_link"><span class="icon-link"></span></a>
								<a href="http://placehold.it/790x391" class="image_zoom prettyPhoto"><span class="icon-search"></span></a>
							</div>
							<div class="title_area">
								<span class="post_comments"><a href="post-audio-b1.html#comments"><span class="icon-comment"></span><span class="post_comments_number">0</span></a></span>
								<h4 class="related_posts_title"><a href="post-audio-b1.html">This is an Audio post</a></h4>
							</div>
							<div class="post_info">
								<span class="post_date">April 17, 2013</span>
							</div>
						</div>
					</div>
					<!-- /Related posts -->

					<!-- COMMENTS -->
					<div id="comments" class="post_comments">
	
						<!-- List of comments -->
						<div class="subtitle_area">
							<h2 class="post_subtitle">Comments <span>(3)</span></h2>
						</div>
						<ol class="comment-list">
							<li id="comment-2" class="comment even depth-1">
								<div class="comment_author_avatar_wrapper">
									<div class="comment_author_avatar pic_wrapper image_wrapper"><img alt="" src="http://placehold.it/50x50" class="avatar avatar-50 photo" height="50" width="50"></div>
								</div>
								<div class="extra_wrap">
									<div class="comment_title_area">
										<h4 class="comment_title"><a href="author.html">John Snow</a></h4>
										<span class="comment_reply"><span class="icon-reply"></span><a class="comment-reply-link" href="?replytocom=2#respond" onclick='return addComment.moveForm("comment-2", "2", "respond", "14")'>Reply</a></span>
									</div>
									<div class="post_info">
										<div class="comment_date"><span class="icon-clock"></span>73 days ago</div>
									</div>
									<div class="comment_content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 
										do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
										ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
										aliquip ex ea commodo consequat.</p>
									</div>
								</div>
							</li>
							<ul class="children">
								<li id="comment-4" class="comment odd alt depth-2">
									<div class="comment_author_avatar_wrapper">
										<div class="comment_author_avatar pic_wrapper image_wrapper"><img alt="" src="http://placehold.it/50x50" class="avatar avatar-50 photo" height="50" width="50"></div>
									</div>
									<div class="extra_wrap">
										<div class="comment_title_area">
											<h4 class="comment_title">Martha Stewart</h4>
											<span class="comment_reply"><span class="icon-reply"></span><a class="comment-reply-link" href="?replytocom=4#respond" onclick='return addComment.moveForm("comment-4", "4", "respond", "14")'>Reply</a></span>
										</div>
										<div class="post_info">
											<div class="comment_date"><span class="icon-clock"></span>73 days ago</div>
										</div>
										<div class="comment_content">
											<p>Sed do eiusmod tempor incididunt ut labore et dolore magna 
											aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris 
											nisi ut aliquip ex ea commodo consequat.</p>
										</div>
									</div>
								</li>
								<ul class="children">
									<li id="comment-5" class="comment even depth-3">
										<div class="comment_author_avatar_wrapper">
											<div class="comment_author_avatar pic_wrapper image_wrapper"><img alt="" src="http://placehold.it/50x50" class="avatar avatar-50 photo" height="50" width="50"></div>
										</div>
										<div class="extra_wrap">
											<div class="comment_title_area">
												<h4 class="comment_title">Jessica Brown</h4>
												<span class="comment_reply"><span class="icon-reply"></span><a class="comment-reply-link" href="?replytocom=5#respond" onclick='return addComment.moveForm("comment-5", "5", "respond", "14")'>Reply</a></span>
											</div>
											<div class="post_info">
												<div class="comment_date"><span class="icon-clock"></span>73 days ago</div>
											</div>
											<div class="comment_content">
												<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco 
												laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
												in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
												pariatur.</p>
											</div>
										</div>
									</li>
								</ul>
							</ul>
						</ol>
						<!-- /List of comments -->
	
						<!-- Form for respond -->
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title">Leave a comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>
							<form action="#" method="post" id="commentform" class="comment-form">
								<p class="comment-form-author">
									<label for="author" class="required">Name <span class="required">(required)</span></label>
									<input id="author" name="author" value="" size="30" aria-required="true" type="text">
								</p>
								<p class="comment-form-email">
									<label for="email" class="required">Email <span class="required">(required)</span></label>
									<input id="email" name="email" value="" size="30" aria-required="true" type="text">
								</p>
								<p class="comment-form-website clearboth">
									<label for="url" class="optional">Website <span class="optional">(optional)</span></label>
									<input id="url" name="url" value="" size="30" aria-required="true" type="text">
								</p>
								<p class="comment-form-comment">
									<label for="comment" class="required">Your Message <span class="required">(required)</span></label>
									<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
								</p>
								<p class="form-submit">
									<input name="submit" id="submit" value="Submit" type="submit">
									<input name="comment_post_ID" value="1" id="comment_post_ID" type="hidden">
									<input name="comment_parent" id="comment_parent" value="0" type="hidden">
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
					
					<!-- Archives -->
					<aside class="widget-number-5 widget widget_archive">
						<h3 class="widget_title">Archives</h3>
						<ul>
							<li><a href="archives.html" title="June 2013">June 2013</a></li>
							<li><a href="archives.html" title="May 2013">May 2013</a></li>
							<li><a href="archives.html" title="April 2013">April 2013</a></li>
							<li><a href="archives.html" title="March 2013">March 2013</a></li>
							<li><a href="archives.html" title="February 2013">February 2013</a></li>
							<li><a href="archives.html" title="January 2013">January 2013</a></li>
						</ul>
					</aside>
					<!-- /Archives -->

				</div>
				<!-- /MAIN SIDEBAR -->

<!-- FOOTER SECTION -->
			</div><!-- #main_inner -->

	    </div>
@endsection