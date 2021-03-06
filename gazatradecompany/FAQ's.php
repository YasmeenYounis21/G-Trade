<?php /*Template Name: fax's */?>
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
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('apple') ?>)</span>apple</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('summsung') ?>)</span>summsung</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('nokia') ?>)</span>nokia</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('htc') ?>)</span>htc</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('lg') ?>)</span>lg</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('sony') ?>)</span>sony</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('lenovo') ?>)</span>lenovo</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('hp') ?>)</span>hp</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('asus') ?>)</span>asus</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('msi') ?>)</span>msi</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('others') ?>)</span>others</a></li>
								</ul>

								
							</div>
						</div><!--/brands_products-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right" style="box-shadow: 3px 3px 6px #888">
					<h3 class=" text-center" style="color : #0083C9; margin-bottom: 30px"><strong>List of Our Faxes</strong></h3>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>