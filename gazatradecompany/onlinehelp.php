<?php /*Template Name: online help */?>
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
					
						<div class="brands_products"><!--brands_products-->
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
					
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>