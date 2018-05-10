<?php include "header.php"; ?>


					<div class="clear"></div>
					<div id="main-content" class="container">
						<?php include "randomPost.php" ?>
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
							<section class="cat-box recent-box recent-blog">
								<div class="cat-box-title">
									<h2>Recent Posts</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">

									<?php
									$query = $this->db->where("category", $_GET["category"])->get("beritaindonesia");

       								foreach ($query->result() as $key => $value):
echo <<<doc

										<article class="item-list tie_video">
											<h2 class="post-box-title">
												<a href="$value->link" rel="bookmark"> $value->judul </a>
											</h2>
											<p class="post-meta">
												<span class="tie-date">
													<i class="fa fa-clock-o"></i>$value->tgl</span>
											</p>
											<div class="post-thumbnail">
												<a href="$value->link" rel="bookmark">
													<img width="310" height="165" src="$value->gambar" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
													<span class="fa overlay-icon"></span>
												</a>
											</div>
											<div class="entry">
												<p>$value->description</p>
												<a class="more-link" href="$value->link">Read More &raquo;</a>
											</div>
											<div class="clear"></div>
										</article>
doc;
									endforeach;
?>
									<div class="clear"></div>
								</div>
							</section>
							<div class="recent-box-pagination">
								<div class="pagination">
									<span class="pages">Page 1 of 9</span>
									<span class="current">1</span>
									<a href="page/2/index.html" class="page" title="2">2</a>
									<a href="page/3/index.html" class="page" title="3">3</a>
									<a href="page/4/index.html" class="page" title="4">4</a>
									<a href="page/5/index.html" class="page" title="5">5</a>
									<a href="page/2/index.html">&raquo;</a>
									<span class="extend">...</span>
									<a href="page/9/index.html" class="last" title="Last &raquo;">Last &raquo;</a>
								</div>
							</div>
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

<?php include "footer.php"; ?>
