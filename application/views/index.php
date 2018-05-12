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

							<?php $bola = $this->db->where("category", "bola")->order_by("id", "desc")->get("beritaindonesia"); ?>
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

							<?php $lifestyle = $this->db->where("category", "lifestyle")->order_by("id", "desc")->get("beritaindonesia"); ?>

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

							<?php $tekno = $this->db->where("category", "tekno")->order_by("id", "desc")->get("beritaindonesia"); ?>

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

							<?php $otomotif = $this->db->where("category", "otomotif")->order_by("id", "desc")->get("beritaindonesia"); ?>

							<section class="cat-box scroll-box tie-cat-8">
								<div class="cat-box-title">
									<h2>
										<a href="/category?category=Otomotif">Otomotif</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<div id="slideshow8" class="group_items-box">

										<?php
											for($a=0; $a<6; $a++)
											{

												echo
<<<eod

												<div class="scroll-item">
													<div class="post-thumbnail">
														<a href="{$otomotif->result()[$a]->gambar}" rel="bookmark">
															<img style="width:240px; height:120px;"  src="{$otomotif->result()[$a]->gambar}" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
															<span class="fa overlay-icon"></span>
														</a>
													</div>
													<h3 class="post-box-title">
														<a href="{$otomotif->result()[$a]->link}" rel="bookmark">{$otomotif->result()[$a]->judul}</a>
													</h3>
													<p class="post-meta">
														<span class="tie-date">
															<i class="fa fa-clock-o"></i> {$otomotif->result()[$a]->tgl}</span>
													</p>
												</div>

eod;
											}


										 ?>
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

							<?php $bisnis = $this->db->where("category", "bisnis")->order_by("id", "desc")->get("beritaindonesia"); ?>

							<section class="cat-box wide-box tie-cat-9">
								<div class="cat-box-title">
									<h2>
										<a href="/category?category=Bisnis">Bisnis</a>
									</h2>
									<div class="stripe-line"></div>
								</div>
								<div class="cat-box-content">
									<ul>
										<li class="first-news">
											<div class="inner-content">
												<div class="post-thumbnail">
													<a href="<?php echo $bisnis->result()[0]->gambar ?>" rel="bookmark">
														<img width="310" height="165" src="<?php echo  $bisnis->result()[0]->gambar ?>" class="attachment-tie-medium size-tie-medium wp-post-image" alt=""/>
														<span class="fa overlay-icon"></span>
													</a>
												</div>
												<h2 class="post-box-title">
													<a href="<?php echo  $bisnis->result()[0]->link ?>" rel="bookmark"><?php echo  $bisnis->result()[0]->judul ?></a>
												</h2>
												<p class="post-meta">
													<span title="Nice" class="post-single-rate post-small-rate stars-small">
														<span style="width: 73.5714285714%"></span>
													</span>
													<span class="tie-date">
														<i class="fa fa-clock-o"></i><?php echo  $bisnis->result()[0]->tgl ?></span>
												</p>
												<div class="entry">
													<p><?php echo  $bisnis->result()[0]->description ?></p>
													<a class="more-link" href="<?php echo  $bisnis->result()[0]->link ?>">Read More &raquo;</a>
												</div>
											</div>
										</li>

										<?php

										for($a=1; $a<5; $a++)
										{
											echo
<<<eod

											<li class="other-news tie_video">
											<div class="post-thumbnail">
											<a href="{$bisnis->result()[$a]->gambar}" rel="bookmark"><img width="110" height="75" src="{$bisnis->result()[$a]->gambar}" class="attachment-tie-small size-tie-small wp-post-image" alt=""/>
											<span class="fa overlay-icon"></span>
											</a>
											</div>
											<h3 class="post-box-title">
											<a href="{$bisnis->result()[$a]->link}" rel="bookmark">{$bisnis->result()[$a]->judul}</a>
											</h3>
											<p class="post-meta">
											<span title="Good" class="post-single-rate post-small-rate stars-small">
											<span style="width: 89.5714285714%"></span>
											</span>
											<span class="tie-date">
											<i class="fa fa-clock-o"></i>{$bisnis->result()[$a]->tgl}</span>
											</p>
											</li>

eod;
										}


										 ?>


									</ul>
									<div class="clear"></div>
								</div>
							</section>

							<div class="clear"></div>
						</div>


						<?php include "sidebar.php" ?>
						<div class="clear"></div>
					</div>
					<?php include "footer.php" ?>
