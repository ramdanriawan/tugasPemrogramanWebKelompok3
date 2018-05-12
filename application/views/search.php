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
									<h2>Pencarian Untuk <?php echo "\"$_GET[q]\""; ?></h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">

									<?php
									$query = $this->db->like("judul", $_GET["q"], "both")->order_by("id", "desc")->get("beritaindonesia");

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
							<?php include "paginationSearch.php" ?>
							<div class="clear"></div>
						</div>

						<?php include "sidebar.php"; ?>
						<div class="clear"></div>
					</div>

<?php include "footer.php"; ?>
