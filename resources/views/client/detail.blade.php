@extends('client.home')
@section('content')
<div id="main">
	<div id="content" class="site-content">

		<section id="amy-page-header" class="amy-page-header">
			<img
				src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_25.jpg"
				alt="{{ $film->name }}" /></section>

		<section class="main-content amy-movie single-movie layout-right has-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="page-content">

							<article id="post-74"
								class="post-74 amy_movie type-amy_movie status-publish amy_genre-cartoon amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-humpray-richard amy_director-gally-peckin amy_director-mae-west">
								<div class="entry-top">
									<div class="entry-poster">
										<img class src="{{ asset('storage/images/'.$film->thumb) }}"
											alt="{{ $film->name }}" width="200px" /> </div>
									<div class="entry-info">
										<h1 class="entry-title p-name" itemprop="name headline">
											<a href rel="bookmark" class="u-url url" itemprop="url">{{
												$film->name }}</a>
										</h1>

										<div class="entry-pg">
											<span class="pg">G</span>

											<span class="duration">
												<i class="fa fa-clock-o"></i>
												{{ $film->thoiLuongChieu }} Phút </span>
										</div>

										<ul class="info-list">
											<li>
												<label>
													Đạo diễn:
												</label>
												<span>
													<a href="#">{{ $film->daoDien }}</a></span>
											</li>

											<li>
												<label>
													Diễn viên:
												</label>
												<span>
													<a href="#">{{ $film->dienVien }}</a></span>
											</li>

											<li>
												<label>
													Thể loại:
												</label>
												<span><a href="#">
														@foreach ($film->categories as $category)
														{{ $category->name }},
														@endforeach</a>
												</span>
											</li>

											<li>
												<label>
													Ngày khởi chiếu:
												</label>
												<span>{{ $film->ngayKhoiChieu }} </span>
											</li>

											<li>
												<label>
													Ngôn ngữ:
												</label>
												<span>{{ $film->ngonNgu }}</span>
											</li>

											<li>
												<label>
													IMDB Rating:
												</label>
												<span>
													8.2 </span>
											</li>

										</ul>
										<!-- <a href="#" class="amy-buy-ticket" target="_blank">Buy Ticket</a> -->

										<div class="entry-action">
											<div class="mrate  no-rate">
												<a href="{{ route('date',['film_id'=> $film->id]) }}" class="amy-buy-ticket" target="_blank">Buy Ticket</a>
                                                 <input type="hidden" name="id" value="{{ $film->id }}">
												 {{-- @php
													 dd($film->id)
												 @endphp --}}
											</div>
											<div class="entry-share">
												<label>Share:</label>
												<ul class="amy-social-links clearfix"><li><a
															href="https://www.facebook.com/sharer.php?u=http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/"
															class="fab fa-facebook" target="_blank"></a></li><li><a
															href="http://www.twitter.com/share?url=http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/"
															class="fab fa-twitter" target="_blank"></a></li><li><a
															href="http://pinterest.com/pin/create/button/?url=http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/"
															class="fab fa-pinterest" target="_blank"></a></li></ul> </div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>

								<div class="entry-content e-content" itemprop="description articleBody">
									<h3 class="info-name amy-title">Nội Dung</h3>
									<p>{{ $film->content }}</p>
								</div>

								<div class="entry-media">
									<h3 class="info-name amy-title">Video &amp; Photo</h3>
									<div class="number-media">
										<span class="gallery"><i></i>5 photos</span>
									</div>
									<div class="media-carousel">
										<div class="amy-slick"
											data-slick='{"slidesToShow":4,"slidesToScroll":4,"autoplay":true,"autoplaySpeed":3000,"arrows":true,"infinite":true,"responsive": [{"breakpoint": 480,"settings": {"slidesToShow": 1,"slidesToScroll": 1}},{"breakpoint": 979,"settings": {"slidesToShow": 3,"slidesToScroll": 3}}],"dots":false}'>
											<div class="media-item">
												<a
													href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
													class="amy-fancybox" rel="movie-gallery">
													<img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-200x150_c.jpg" />
												</a>
											</div>
											<div class="media-item">
												<a
													href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg"
													class="amy-fancybox" rel="movie-gallery">
													<img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56-200x150_c.jpg" />
												</a>
											</div>
											<div class="media-item">
												<a
													href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg"
													class="amy-fancybox" rel="movie-gallery">
													<img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55-200x150_c.jpg" />
												</a>
											</div>
											<div class="media-item">
												<a
													href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
													class="amy-fancybox" rel="movie-gallery">
													<img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54-200x150_c.jpg" />
												</a>
											</div>
											<div class="media-item">
												<a
													href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
													class="amy-fancybox" rel="movie-gallery">
													<img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53-200x150_c.jpg" />
												</a>
											</div>
											<div class="media-item">
												<a href="https://player.vimeo.com/video/51834631"
													class="fancybox.iframe amy-fancybox"><img
														src="https://i.vimeocdn.com/video/357455249-732b250e69cba9e97ba604b86d2966bd6e105ddef1602ece3eedca1460d6b1d6-d_640" /><i
														class="fa fa-play"></i></a> </div>
										</div>
									</div>
								</div>

								<div class="entry-showtime single-cinema">
									<div class="clearfix">
										<h3 class="info-name amy-title">Showtime</h3>
									</div>
									<div class="showtime">
										<div class="showtime-item single-cinema"> <div class="st-item"> <div
													class="st-title"><label>February 11, 2022</label>
													<!-- <a href="#" class="amy-buy-ticket" target="_blank">Buy Ticket</a> -->
												</div><ul><li>12h30</li><li> 15h40</li><li> 19h20</li></ul> </div>
											<div class="st-item"> <div class="st-title"><label>February 25, 2022</label>
													<!-- <a href="#" class="amy-buy-ticket" target="_blank">Buy Ticket</a> -->
												</div><ul><li>09h20</li><li> 13h10</li><li> 15h40</li><li> 17h30</li></ul>
											</div> <div class="st-item"> <div class="st-title"><label>March 10,
														2022</label>
													<!-- <a href="#" class="amy-buy-ticket" target="_blank">Buy Ticket</a> -->
												</div><ul><li>09h20</li><li> 13h10</li><li> 17h20</li><li> 21h30</li></ul>
											</div> <div class="st-item"> <div class="st-title"><label>May 13,
														2022</label>
													<!-- <a href="#" class="amy-buy-ticket" target="_blank">Buy Ticket</a> -->
												</div><ul><li>07h20</li><li> 10h10. 15h30</li><li> 21h00. 23h30</li></ul>
											</div> </div> </div>
								</div>

								<div class="entry-comment">

									<div class="amy-comment-form">
										<div id="respond" class="comment-respond">
											<h3 id="reply-title" class="comment-reply-title amy-title">Write a
												comment <small><a rel="nofollow" id="cancel-comment-reply-link"
														href="/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/#respond"
														style="display:none;">Cancel reply</a></small></h3><form
												action="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-comments-post.php"
												method="post" id="commentform" class="comment-form"><p
													class="comment-notes"><span id="email-notes">Your email address
														will not be published.</span> <span class="required-field-message"
														aria-hidden="true">Required fields are marked <span
															class="required" aria-hidden="true">*</span></span></p><p
													class="comment-form-comment"><label for="comment">Comment <span
															class="required">*</span></label><textarea name="comment"
														id="comment" cols="45" rows="8" max-length="65525"
														aria-required="true" required="required"></textarea><div
														class="row"><div class="col-md-4"><p class="comment-form-author"><label
																	for="author">Name <span class="required">*</span></label><input
																	type="text" value id="author" name="author" size="30"
																	maxlength="245" aria-required="true" required="required" /></p></div>
														<div class="col-md-4"><p class="comment-form-email"><label
																	for="email">Email <span class="required">*</span></label><input
																	type="email" value id="email" name="email" size="30"
																	maxlength="100" aria-describedby="email-notes"
																	aria-required="true" required="required" /></p></div>
														<div class="col-md-4"><p class="comment-form-url"><label for="url">Website</label><input
																	type="url" value id="url" name="url" size="30" maxlength="200" /></p></div></div>
													<p class="comment-form-cookies-consent"><input
															id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
															type="checkbox" value="yes" /> <label
															for="wp-comment-cookies-consent">Save my name, email, and website
															in this browser for the next time I comment.</label></p>
													<p class="form-submit"><input name="submit" type="submit"
															id="submit" class="submit" value="Post Comment" /> <input
															type='hidden' name='comment_post_ID' value='74'
															id='comment_post_ID' />
														<input type='hidden' name='comment_parent' id='comment_parent'
															value='0' />
													</p></form> </div><!-- #respond -->
										</div>

									</div>

								</article>
							</div>
						</div>
						<div class="col-md-4 amy-sidebar-clear"><div
								class="amy-page-sidebar amy-sidebar-right">
								<aside id="sidebar">
									<div class="amy-widget widget_block widget_media_image">
										<figure class="wp-block-image size-full"><img loading="lazy"
												width="350" height="272"
												src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62.png"
												alt class="wp-image-254"
												srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62.png 350w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62-300x233.png 300w"
												sizes="(max-width: 350px) 100vw, 350px" /></figure>
										<div class="clear"></div></div><div class="amy-widget amy-widget-list">
											<div class="amy-widget amy-widget-list list-movie ">
											<h4 class="amy-title amy-widget-title">Top Movie</h4>
											@foreach ($films as $item)
												
			                              <div class="entry-item"><div class="entry-thumb">
											<img src="{{ asset('storage/images/'.$item->thumb) }}" alt="{{ $item->name }}" width="50px" style="margin-left: 35px" /></div>
											<div class="entry-content">
												<h2 class="entry-title"><a href="/detail/{{ $item->id }}">{{ $item->name }}</a></h2>
												<div><span class="duration"><i class="fa fa-clock-o"></i>{{ $item->thoiLuongChieu }} Phút</span></div>
												<div class="genre"><span>
													@foreach ($item->categories as $category)
													{{ $category->name }},
												@endforeach
												                </span></div>
											   </div>
												</div>

												@endforeach
												</div>
												<div class="clear"></div></div><div
										class="amy-widget amy-widget-list"><div
											class="amy-widget amy-widget-list list-post "><h4
												class="amy-title amy-widget-title">Recent Posts</h4><div
												class="entry-item"><div class="entry-thumb"><img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59-115x85_c.jpg" /></div><div
													class="entry-content"><h2 class="entry-title"><a
															href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/six-book-to-film-adaptations-to-get-excited-about-this-autumn/">Six
															book-to-film adaptations to get excited about this autumn</a></h2><div
														class="entry-meta"><span class="entry-date">April 28, 2022</span><span>
															/ </span><span class="entry-comment">0 Comments</span></div></div><div
													class="clearfix"></div></div><div class="entry-item"><div
													class="entry-thumb"><img
														src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-115x85_c.jpg" /></div><div
													class="entry-content"><h2 class="entry-title"><a
															href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/the-beatles-eight-days-a-week-the-touring/">The
															Beatles: Eight Days a Week – The Touring</a></h2><div
														class="entry-meta"><span class="entry-date">April 28, 2022</span><span>
															/ </span><span class="entry-comment">0 Comments</span></div></div><div
													class="clearfix"></div></div></div><div class="clear"></div></div><div
										class="amy-widget widget_block widget_media_image">
										<figure class="wp-block-image size-full"><img loading="lazy"
												width="350" height="290"
												src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63.png"
												alt class="wp-image-255"
												srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63.png 350w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63-300x249.png 300w"
												sizes="(max-width: 350px) 100vw, 350px" /></figure>
										<div class="clear"></div></div></aside>
							</div></div> </div>
				</div>
			</section>

		</div>
	</div>

	@endsection