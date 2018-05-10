<?php include "header.php" ?>
					<div class="clear"></div>

					<div id="main-content" class="container">
						<?php include "randomPost.php"; ?>
						<div class="clear"></div>
						<script>
							jQuery(document).ready(function () {
								var featuredItems = jQuery("#featured-posts .featured-post");
								for (var i = 0; i < featuredItems.length; i += 5) {
									featuredItems.slice(i, i + 5).wrapAll('<div class="featured-posts-single-slide"></div>');
								}
								jQuery('#featured-posts').flexslider({
									animation: "fade",
									selector: ".featured-posts-single-slide",
									slideshowSpeed: 7000,
									animationSpeed: 600,
									randomize: false,
									pauseOnHover: true,
									prevText: "",
									nextText: "",
									slideshow: true,
									controlNav: false
								});
							});
						</script>
						<div class="content">

							<?php $bola = $this->db->where("category", "bola")->get("beritaindonesia"); ?>
							<section class="cat-box list-box tie-cat-1">
								<div class="cat-box-title">
									<h2>
										<a href="/category?category=Bola">Bola</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<ul>
										<li class="first-news tie_audio">
											<div class="post-thumbnail">
												<a href="<?php echo $bola->result()[0]->gambar ?>" rel="bookmark">
													<img width="310" height="165" src="<?php echo $bola->result()[0]->gambar  ?>" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h2 class="post-box-title">
												<a href="<?php echo $bola->result()[0]->link ?>" rel="bookmark"><?php echo $bola->result()[0]->judul ?></a>
											</h2>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i><?php echo $bola->result()[0]->tgl ?></span>
											</p>
											<div class="entry">
												<p><?php echo $bola->result()[0]->description ?></p>
												<a class="more-link" href="<?php echo $bola->result()[0]->link ?>">Read More &raquo;</a>
											</div>
										</li>

										<?php

										for ($i=1; $i < 5; $i++) {
echo <<<doc
											<li class="other-news tie_video">
											<div class="post-thumbnail">
											<a href="{$bola->result()[$i]->gambar}" rel="bookmark"><img width="110" height="75" src="{$bola->result()[$i]->gambar}" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
											<span class="fa overlay-icon"></span>
											</a>
											</div>
											<h3 class="post-box-title">
											<a href="{$bola->result()[$i]->link}" rel="bookmark">{$bola->result()[$i]->judul}</a>
											</h3>
											<p class="post-meta">
											<span class="tie-date">
											<i class="fa fa-clock-o"></i>{$bola->result()[$i]->tgl}</span>
												</p>
												</li>

doc;
										}


										 ?>
									</ul>
									<div class="clear"></div>
								</div>
							</section>

							<?php $lifestyle = $this->db->where("category", "lifestyle")->get("beritaindonesia"); ?>

							<section class="cat-box column2 tie-cat-6 ">
								<div class="cat-box-title">
									<h2>
										<a href="/category?category=Lifestyle">Lifestyle</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<ul>
										<li class="first-news tie_map">
											<div class="inner-content">
												<div class="post-thumbnail">
													<a href="<?php echo $lifestyle->result()[0]->judul ?>" rel="bookmark">
														<img width="310" height="165" src="<?php echo $lifestyle->result()[0]->gambar ?>" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
														<span class="fa overlay-icon"></span>
													</a>
												</div>
												<h2 class="post-box-title">
													<a href="<?php echo $lifestyle->result()[0]->link ?>"><?php echo $lifestyle->result()[0]->judul ?></a>
												</h2>
												<p class="post-meta">
													<span class="tie-date">
														<i class="fa fa-clock-o"></i><?php echo $lifestyle->result()[0]->tgl ?></span>
												</p>
												<div class="entry">
													<p><?php echo $lifestyle->result()[0]->description ?></p>
													<a class="more-link" href="<?php echo $lifestyle->result()[0]->link ?>">Read More &raquo;</a>
												</div>
											</div>
										</li>

										<?php
											for($a=1; $a<5; $a++)
											{
												echo
<<<doc

												<li class="other-news tie_soundcloud">
												<div class="post-thumbnail">
												<a href="{$lifestyle->result()[$a]->gambar}" rel="bookmark"><img width="110" height="75" src="{$lifestyle->result()[$a]->gambar}" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
												<span class="fa overlay-icon"></span>
												</a>
												</div>
												<h3 class="post-box-title">
												<a href="{$lifestyle->result()[$a]->link}" rel="bookmark">{$lifestyle->result()[$a]->judul}</a>
												</h3>
												<p class="post-meta">
												<span class="tie-date">
												<i class="fa fa-clock-o"></i>{$lifestyle->result()[$a]->tgl}</span>
												</p>
												</li>


doc;

											}


										 ?>
									</ul>
								</div>
							</section>

							<?php $tekno = $this->db->where("category", "tekno")->get("beritaindonesia"); ?>

							<section class="cat-box column2 tie-cat-10 last-column">
									<div class="cat-box-title">
									<h2>
										<a href="/category?category=Tekno">Tekno</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<ul>
										<li class="first-news tie_map">
											<div class="inner-content">
												<div class="post-thumbnail">
													<a href="<?php echo $tekno->result()[0]->judul ?>" rel="bookmark">
														<img width="310" height="165" src="<?php echo $tekno->result()[0]->gambar ?>" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
														<span class="fa overlay-icon"></span>
													</a>
												</div>
												<h2 class="post-box-title">
													<a href="<?php echo $tekno->result()[0]->link ?>"><?php echo $tekno->result()[0]->judul ?></a>
												</h2>
												<p class="post-meta">
													<span class="tie-date">
														<i class="fa fa-clock-o"></i><?php echo $tekno->result()[0]->tgl ?></span>
												</p>
												<div class="entry">
													<p><?php echo $tekno->result()[0]->description ?></p>
													<a class="more-link" href="<?php echo $tekno->result()[0]->link ?>">Read More &raquo;</a>
												</div>
											</div>
										</li>

										<?php
											for($a=1; $a<5; $a++)
											{
												echo
<<<doc

												<li class="other-news tie_soundcloud">
												<div class="post-thumbnail">
												<a href="{$tekno->result()[$a]->gambar}" rel="bookmark"><img width="110" height="75" src="{$tekno->result()[$a]->gambar}" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
												<span class="fa overlay-icon"></span>
												</a>
												</div>
												<h3 class="post-box-title">
												<a href="{$tekno->result()[$a]->link}" rel="bookmark">{$tekno->result()[$a]->judul}</a>
												</h3>
												<p class="post-meta">
												<span class="tie-date">
												<i class="fa fa-clock-o"></i>{$tekno->result()[$a]->tgl}</span>
												</p>
												</li>


doc;

											}


										 ?>
									</ul>
								</div>
							</section>

							<?php $otomotif = $this->db->where("category", "otomotif")->get("beritaindonesia"); ?>

							<section class="cat-box scroll-box tie-cat-8">
								<div class="cat-box-title">
									<h2>
										<a href="/category?category=Otomotif">Otomotif</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<div id="slideshow8" class="group_items-box">
										<div class="scroll-item">
											<div class="post-thumbnail">
												<a href="<?php  ?>" rel="bookmark">
													<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/old-car-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2015/01/24/used-car-dealer-sales-tricks-exposed/index.html" rel="bookmark">Used Car Dealer Sales Tricks Exposed</a>
											</h3>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Jan 24, 2015</span>
											</p>
										</div>
										<div class="scroll-item tie_lightbox">
											<div class="post-thumbnail">
												<a href="2014/10/24/20-ways-to-sell-your-product-faster/index.html" rel="bookmark">
													<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/4381851322_d46fd7d75e_b-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/10/24/20-ways-to-sell-your-product-faster/index.html" rel="bookmark">20 Ways To Sell Your Product Faster</a>
											</h3>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Oct 24, 2014</span>
											</p>
										</div>
										<div class="scroll-item">
											<div class="post-thumbnail">
												<a href="2014/08/24/take-advantage-of-the-falling-stock-market/index.html" rel="bookmark">
													<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/Fence-Filtered-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/08/24/take-advantage-of-the-falling-stock-market/index.html" rel="bookmark">Take Advantage Of The Falling Stock Market</a>
											</h3>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Aug 24, 2014</span>
											</p>
										</div>
										<div class="scroll-item">
											<div class="post-thumbnail">
												<a href="2014/06/24/new-a-stain-remover-that-works-like-magic/index.html" rel="bookmark">
													<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/mtNrf7oxS4uSxTzMBWfQ_DSC_0043-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/06/24/new-a-stain-remover-that-works-like-magic/index.html" rel="bookmark">New! A Stain Remover That Works Like Magic</a>
											</h3>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Jun 24, 2014</span>
											</p>
										</div>
										<div class="scroll-item">
											<div class="post-thumbnail">
												<a href="2014/05/24/discover-3-simple-ways-to-reduce-your-unwanted-wrinkles/index.html" rel="bookmark">
													<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/6580415133_58b3a52b05_b-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/05/24/discover-3-simple-ways-to-reduce-your-unwanted-wrinkles/index.html" rel="bookmark">Simple Ways To Reduce Your Unwanted Wrinkles!</a>
											</h3>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>May 24, 2014</span>
											</p>
										</div>
										<div class="scroll-item">
											<div class="post-thumbnail">
												<a href="2014/04/24/unlock-the-secrets-of-selling-high-ticket-items/index.html" rel="bookmark">
													<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/5731288337_5fc7e22da6_b-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/04/24/unlock-the-secrets-of-selling-high-ticket-items/index.html" rel="bookmark">Unlock The Secrets Of Selling High Ticket Items</a>
											</h3>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Apr 24, 2014</span>
											</p>
										</div>
										<div class="clear"></div>
									</div>
									<div id="nav8" class="scroll-nav"></div>
								</div>
							</section>
							<div class="clear"></div>
							<script type="text/javascript">
								jQuery(document).ready(function () {
									var vids = jQuery("#slideshow8 .scroll-item");
									for (var i = 0; i < vids.length; i += 3) {
										vids.slice(i, i + 3).wrapAll('<div class="group_items"></div>');
									}
									jQuery(function () {
										jQuery('#slideshow8').cycle({
											fx: 'scrollHorz',
											timeout: 3000,
											pager: '#nav8',
											slideExpr: '.group_items',
											speed: 300,
											slideResize: false,
											pause: true
										});
									});
								});
							</script>
							<section class="cat-box wide-box tie-cat-9">
								<div class="cat-box-title">
									<h2>
										<a href="category/tech/index.html">Tech</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<ul>
										<li class="first-news">
											<div class="inner-content">
												<div class="post-thumbnail">
													<a href="2014/12/24/nexus-6-review/index.html" rel="bookmark">
														<img width="310" height="165" src="wp-content/uploads/sites/3/2015/01/nexus-6.still002-100529777-orig-310x165.jpg" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
														<span class="fa overlay-icon"></span>
													</a>
												</div>
												<h2 class="post-box-title">
													<a href="2014/12/24/nexus-6-review/index.html" rel="bookmark">Nexus 6 review</a>
												</h2>
												<p class="post-meta">
													<span title="Nice" class="post-single-rate post-small-rate stars-small">
														<span style="width: 73.5714285714%"></span>
													</span>
													<span class="tie-date">
														<i class="fa fa-clock-o"></i>Dec 24, 2014</span>
												</p>
												<div class="entry">
													<p>Don&#8217;t act so surprised, Your Highness. You weren&#8217;t on any mercy mission this time. Several &hellip;</p>
													<a class="more-link" href="2014/12/24/nexus-6-review/index.html">Read More &raquo;</a>
												</div>
											</div>
										</li>
										<li class="other-news tie_video">
											<div class="post-thumbnail">
												<a href="2014/12/24/apple-ipad-review/index.html" rel="bookmark"><img width="110" height="75" src="wp-content/uploads/sites/3/2015/01/ipad-air-feature-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/12/24/apple-ipad-review/index.html" rel="bookmark">Apple iPad review</a>
											</h3>
											<p class="post-meta">
												<span title="Good" class="post-single-rate post-small-rate stars-small">
													<span style="width: 89.5714285714%"></span>
												</span>
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Dec 24, 2014</span>
											</p>
										</li>
										<li class="other-news tie_thumb">
											<div class="post-thumbnail">
												<a href="2014/11/24/blackberry-classic-review/index.html" rel="bookmark"><img width="110" height="75" src="wp-content/uploads/sites/3/2015/01/croppedClassic_Black_Angle4_Left-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/11/24/blackberry-classic-review/index.html" rel="bookmark">BlackBerry Classic review</a>
											</h3>
											<p class="post-meta">
												<span title="Not Bad" class="post-single-rate post-small-rate stars-small">
													<span style="width: 76.1428571429%"></span>
												</span>
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Nov 24, 2014</span>
											</p>
										</li>
										<li class="other-news tie_lightbox">
											<div class="post-thumbnail">
												<a href="2014/11/24/apple-imac-with-retina-5k-display-review/index.html" rel="bookmark"><img width="110" height="75" src="wp-content/uploads/sites/3/2015/01/apple-imac-retina-5k-review-12-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/11/24/apple-imac-with-retina-5k-display-review/index.html" rel="bookmark">Apple iMac with Retina 5K display review</a>
											</h3>
											<p class="post-meta">
												<span title="Great" class="post-single-rate post-small-rate stars-small">
													<span style="width: 81.25%"></span>
												</span>
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Nov 24, 2014</span>
											</p>
										</li>
										<li class="other-news">
											<div class="post-thumbnail">
												<a href="2014/11/24/iphone-6-plus-review/index.html" rel="bookmark"><img width="110" height="75" src="wp-content/uploads/sites/3/2015/01/Apple_Oct_2014_854-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<h3 class="post-box-title">
												<a href="2014/11/24/iphone-6-plus-review/index.html" rel="bookmark">iPhone 6 Plus review</a>
											</h3>
											<p class="post-meta">
												<span title="Graet" class="post-single-rate post-small-rate stars-small">
													<span style="width: 87.142857142857%"></span>
												</span>
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>Nov 24, 2014</span>
											</p>
										</li>
									</ul>
									<div class="clear"></div>
								</div>
							</section>

							<div class="clear"></div>
						</div>
						<aside id="sidebar">
							<div class="theiaStickySidebar">

								<div class="widget" id="tabbed-widget">
									<div class="widget-container">
										<div class="widget-top">
											<ul class="tabs posts-taps">
												<li class="tabs">
													<a href="#tab4">Tags</a>
												</li>
											</ul>
										</div>
										<div id="tab4" class="tabs-wrap tagcloud">
											<a href="tag/article/index.html" class="tag-cloud-link tag-link-59 tag-link-position-1" style="font-size: 8pt;">Article</a>
											<a href="tag/author/index.html" class="tag-cloud-link tag-link-61 tag-link-position-2" style="font-size: 8pt;">Author</a>
											<a href="tag/video/index.html" class="tag-cloud-link tag-link-62 tag-link-position-3" style="font-size: 8pt;">Video</a>
											<a href="tag/post/index.html" class="tag-cloud-link tag-link-60 tag-link-position-4" style="font-size: 8pt;">Post</a>
											<a href="tag/tags/index.html" class="tag-cloud-link tag-link-53 tag-link-position-5" style="font-size: 8pt;">Tags</a>
											<a href="tag/tag/index.html" class="tag-cloud-link tag-link-54 tag-link-position-6" style="font-size: 8pt;">Tag</a>
											<a href="tag/html/index.html" class="tag-cloud-link tag-link-55 tag-link-position-7" style="font-size: 8pt;">HTML</a>
											<a href="tag/wordpress/index.html" class="tag-cloud-link tag-link-56 tag-link-position-8" style="font-size: 8pt;">WordPress</a>
											<a href="tag/php/index.html" class="tag-cloud-link tag-link-57 tag-link-position-9" style="font-size: 8pt;">PHP</a>
											<a href="tag/world/index.html" class="tag-cloud-link tag-link-58 tag-link-position-10" style="font-size: 8pt;">World</a>
											<a href="tag/review/index.html" class="tag-cloud-link tag-link-14 tag-link-position-11" style="font-size: 8pt;">review</a>
											<a href="tag/mobile/index.html" class="tag-cloud-link tag-link-15 tag-link-position-12" style="font-size: 8pt;">mobile</a>
											<a href="tag/apple/index.html" class="tag-cloud-link tag-link-17 tag-link-position-13" style="font-size: 8pt;">apple</a>
											<a href="tag/iphone/index.html" class="tag-cloud-link tag-link-13 tag-link-position-14" style="font-size: 8pt;">iphone</a>
											<a href="tag/monitor/index.html" class="tag-cloud-link tag-link-16 tag-link-position-15" style="font-size: 8pt;">monitor</a>
											<a href="tag/imac/index.html" class="tag-cloud-link tag-link-18 tag-link-position-16" style="font-size: 8pt;">imac</a>
											<a href="tag/blackberry/index.html" class="tag-cloud-link tag-link-19 tag-link-position-17" style="font-size: 8pt;">blackberry</a>
											<a href="tag/samsung/index.html" class="tag-cloud-link tag-link-20 tag-link-position-18" style="font-size: 8pt;">samsung</a>
											<a href="tag/galaxy/index.html" class="tag-cloud-link tag-link-21 tag-link-position-19" style="font-size: 8pt;">galaxy</a>
											<a href="tag/google/index.html" class="tag-cloud-link tag-link-22 tag-link-position-20" style="font-size: 8pt;">google</a>
										</div>
									</div>
								</div>
								<div id="social-4" class="widget social-icons-widget">
									<div class="widget-top">
										<h4>Social</h4>
										<div class="stripe-line"></div>
									</div>
									<div class="widget-container">
										<div class="social-icons social-colored">

											<a class="ttip-none" title="Facebook" href="https://facebook.com/tielabs">
												<i class="fa fa-facebook"></i>
											</a>
											<a class="ttip-none" title="Twitter" href="https://twitter.com/tielabs">
												<i class="fa fa-twitter"></i>
											</a>

											<a class="ttip-none" title="instagram" href="https://instagram.com/imo3aser">
												<i class="fa fa-instagram"></i>
											</a>
											<a class="ttip-none" title="instagram" href="https://instagram.com/imo3aser">
												<i class="fa fa-youtube"></i>
											</a>
											<a class="ttip-none" title="instagram" href="https://instagram.com/imo3aser">
												<i class="fa fa-google-plus"></i>
											</a>
										</div>
									</div>
								</div>
								<script>
									jQuery(document).ready(function () {
										jQuery('#tie-slider-widget-3').flexslider({
											animation: "fade",
											slideshowSpeed: 7000,
											animationSpeed: 600,
											randomize: false,
											pauseOnHover: true,
											prevText: "",
											nextText: "",
											controlNav: false
										});
									});
								</script>
								<div id="tie_weatherwidget-3" class="widget widget_tie_weatherwidget">
									<div class="widget-top">
										<h4>Weather</h4>
										<div class="stripe-line"></div>
									</div>
									<div class="widget-container">
										<div id="tie-weather-cairoeg" class="tie-weather-wrap">
											<div class="tie-weather-current-temp">
												<div class="weather-icon">
													<i class="tieicon-cloud"></i>
												</div>
												28<sup>C</sup>
											</div>
											<div class="tie-weather-todays-stats">
												<div class="weather_name">Cairo</div>
												<div class="weather_desc">scattered clouds</div>
												<div class="weather_humidty">humidity: 28%
												</div>
												<div class="weather_wind">wind: 7km/h WNW</div>
												<div class="weather_highlow">
													H 28 &bull; L 28
												</div>
											</div>
											<div class="tie-weather-forecast weather_days_5">
												<div class="tie-weather-forecast-day">
													<div class="tie-weather-forecast-day-temp">27<sup>C</sup>
													</div>
													<div class="tie-weather-forecast-day-abbr">Tue</div>
												</div>
												<div class="tie-weather-forecast-day">
													<div class="tie-weather-forecast-day-temp">26<sup>C</sup>
													</div>
													<div class="tie-weather-forecast-day-abbr">Wed</div>
												</div>
												<div class="tie-weather-forecast-day">
													<div class="tie-weather-forecast-day-temp">35<sup>C</sup>
													</div>
													<div class="tie-weather-forecast-day-abbr">Thu</div>
												</div>
												<div class="tie-weather-forecast-day">
													<div class="tie-weather-forecast-day-temp">29<sup>C</sup>
													</div>
													<div class="tie-weather-forecast-day-abbr">Fri</div>
												</div>
												<div class="tie-weather-forecast-day">
													<div class="tie-weather-forecast-day-temp">31<sup>C</sup>
													</div>
													<div class="tie-weather-forecast-day-abbr">Sat</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<div class="clear"></div>
					</div>
					<?php include "footer.php" ?>
