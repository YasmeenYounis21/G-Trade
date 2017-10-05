<?php /*Template Name: store's location */?>
<?php get_header();?>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mobiles">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mobiles
										</a>
									</h4>
								</div>
								<div id="mobiles" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
				    							if (is_active_sidebar('category_mobile')) {
				    	                        	dynamic_sidebar('category_mobile');
				    							}
				    						?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#labtops">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Labtops
										</a>
									</h4>
								</div>
								<div id="labtops" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
				    							if (is_active_sidebar('category_labtop')) {
				    	                        	dynamic_sidebar('category_labtop');
				    							}
				    						?>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#tablets">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Taplets
										</a>
									</h4>
								</div>
								<div id="tablets" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
				    							if (is_active_sidebar('category_tablet')) {
				    	                        	dynamic_sidebar('category_tablet');
				    							}
				    						?>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products" style="margin-bottom: 20px"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<h2 class="title text-center"><strong>Store Location</strong></h2>    			    				    				
					<div id="gmap" class="contact-map" style="margin-bottom: 100px">
					<?php //short code for google map for gaza sky geeks
                      echo do_shortcode('[te_google_map width="100%" height="470" link="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.406951832453!2d34.44753688519799!3d31.512981081372086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f6b18708d27%3A0x1f26dc8d799cd45b!2sGaza+Sky+Geeks!5e0!3m2!1sar!2s!4v1505381550965" frameborder="0" style="border:0" allowfullscreen></iframe>"]');
					?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>