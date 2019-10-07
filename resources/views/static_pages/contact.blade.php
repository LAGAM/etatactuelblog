@extends('template')
@section('title', 'Contact')
@section('contenu')

<div id="main" class="with_sidebar right_sidebar">
            
            <!-- /Google map -->
            <br/><br/><br/><br/>

            <div id="main_inner" class="clearboth">
<!-- /HEADER SECTION -->

                <div id="content" class="content_blog blog_style_b3 post_single" role="main">
                    

                    <!-- COMMENTS -->
                    <div id="comments" class="post_comments">
        
                        <!-- Form for respond -->
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Laisser un commentaire <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>
                            <form action="{{route('contact')}}" method="post" id="commentform" class="comment-form">
                                @csrf
                                <p class="comment-form-author">
                                    <label for="nom" class="required">Nom <span class="required">(required)</span></label>
                                    <input id="nom" name="nom" value="" size="30" aria-required="true" type="text">
                                </p>
                                <p class="comment-form-email">
                                    <label for="email" class="required">Email <span class="required">(required)</span></label>
                                    <input id="email" name="email" value="" size="30" aria-required="true" type="email">
                                </p>
                                <p class="comment-form-comment">
                                    <label for="message" class="required">Votre Message <span class="required">(required)</span></label>
                                    <textarea id="message" name="message" cols="45" rows="8" aria-required="true"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" id="submit" value="Submit" type="submit">
                                    <input name="comment_post_ID" value="1" id="comment_post_ID" type="hidden">
                                    <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                                </p>
                            </form>
                            @if(session()->has('message'))
                            <script type="text/javascript">    
                                iziToast.warning({
                                    title: 'Merci',
                                    message: '{{ session()->get("message") }}',
                                    image: '{{asset("public/avatar.png")}}',
                                    imageWidth: 50,
                                });      
                            </script>
                            <!-- <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div> -->
                        @endif
                        </div>
                        <!-- /Form for respond -->
    
                        <div class="nav_comments"></div>
    
                    </div>
                    <!-- /COMMENTS -->
            
                </div><!-- #content -->

                <!-- MAIN SIDEBAR -->
                <div id="sidebar_main" class="widget_area sidebar_main" role="complementary">
                    
                    <!-- Contact info -->
                    <aside class="widget-number-1 widget widget_contacts">
                        <h3 class="widget_title">Nous Contacter</h3>
                        <div class="widget_inner">
                            <div class="contacts_address">Abidjan Cocody II plateaux, 28 BP 536 ABIDJAN 28</div>
                            <div class="contacts_phone"><span class="icon-phone"></span>(+225) 22515147 / 42222200</div>
                            <div class="contacts_email"><span class="icon-mail"></span><a href="mailto:courrier@uvci.edu.ci">courrier@uvci.edu.ci</a></div>
                            <div class="contacts_site"><span class="icon-globe"></span><a href="http://uvci.edu.ci" target="_blank">www.uvci.edu.ci</a></div>
                        </div>
                    </aside>
                    <!-- /Contact info -->
                
                    <!-- Social icons -->
                </div>
                <!-- /MAIN SIDEBAR -->

<!-- FOOTER SECTION -->
            </div><!-- #main_inner -->

        </div><!-- #main -->

@endsection