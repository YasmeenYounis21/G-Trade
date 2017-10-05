<?php
/*
Template Name: products2
*/
?>
<?php get_header(); ?>

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
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">

                <div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
											<?php 
											$g_category_value=the_slug();
											$args=array(
												'post_type' =>'product',
												'category_name' => $g_category_value,
												'order' => 'ASC',
												'post_per_page' =>12
											);
											
											$timer=1;
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
                                               
												while ( $products->have_posts() && $timer<=12) {
													$products->the_post();

												echo '<div class="col-sm-4">';
							                    echo '<div class="product-image-wrapper">';
								                echo '<div class="single-products my-custom-single-product">';  
										        echo '<div class="productinfo text-center">'; 
       
												echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
												echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
												echo '<p>'.get_the_title(get_the_ID()).'</p>';
												echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
												echo'</div>';	
										        echo '<div class="product-overlay">';
											    echo '<div class="overlay-content">';

													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
                                                    echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
                                                    echo '<span>Color : '.get_post_meta(get_the_ID(),'color', true).'</span>';
                                                    echo '<span>Opreating System : '.get_post_meta(get_the_ID(),'opreating_system', true).'</span>';
                                                    echo '<span>Quantity : '.get_post_meta(get_the_ID(),'product_quantity', true).'</span>';
                                                    echo '<br>';
                                                    echo '<a href="'.get_permalink().'" class="more-details"><i class="fa fa-plus-square"></i>More Deatails :</a>';
                                                    echo '<br>';
                                                    echo '<br>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
													echo '</div>';
													echo '</div>';
													echo '</div>';
													echo '<div class="choose">
													<ul class="nav nav-pills nav-justified">
									                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									                 </ul>
									                 </div>
									                 </div>
								                     </div>';
                                                    $timer++;

											    }  
												
												wp_reset_postdata();
											} else {
	
											}
											
								            ?>
								
			</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
