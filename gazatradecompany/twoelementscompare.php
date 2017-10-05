<?php /*Template Name: twoelelementscompare*/?>

	<?php
	 get_header();
   	?>
   	<!--to add slider plugin-->
	<?php
     echo do_shortcode('[gsh_slider_plugin]');
	?>
      <?php
      $product_category = get_terms('product_taxonomy');
      ?>
       <label for="">product category</label>
       <select name="product_cat" id="">
       <option value="">Select product category</option>
      <?php
    foreach($product_categories as $product_category){
      ?>
      <option value="<?php echo $product_category->term_id; ?>"><?php echo $product_category->name; ?></option>
      <?php
    }
    ?>
    
  </select>
  <br>
  <input type="submit" value="Search">

     <form>

      <!--- query takes the post tiltle the select inside loop -->

	  <label for="mobile1">first mobile</label><br>
	  <select name="mobiles">
      <?php
														$args=array(
														'post_type' =>'product',
														'category_name' => 'mobile'
														
                                                        );
											
													$product1= new WP_Query($args);

													if ( $product1->have_posts() ) {
														while ( $product1->have_posts()) {
															
															$product1->the_post();
															?>

      
      <option value="<?php echo get_the_title(); ?>">  </option>
      	<?php
  }}
      	?>
    
   
  </select>

  <br>

  <input type="submit" value="Search">

   	  <label for="mobile2">secound mobile</label><br>
	<select name="Mobiles">
   <?php
														$args=array(
														'post_type' =>'product',
														'category_name' => 'mobile'
														
                                                        );
											
													$products2= new WP_Query($args);

													if ( $products2->have_posts() ) {
														while ( $products2->have_posts()) {
															
															$products2->the_post();
															?>
      
      <option value="<?php echo get_the_title(); ?>" >   </option>
      	<?php 
      }
  }
      	?>
   
   
  </select>
    <br>

  <input type="submit" value="Search">
    </form>



   
<!-- Results mobile1 features -->
<?php
 $product1 = new wp_query($args);

	if ( $product1->have_posts() ) {
		$product1->the_post();										
											
     			echo '<h2>'.get_the_title(get_the_ID()).'</h2>';
											echo '<p>';
											echo 'Web ID: ';
											echo get_post_meta(get_the_ID(),'product_web_id', true);
											echo '</p>';
											/*echo get_theme_file_uri('/assets/images/product-details/rating.png');*/
											echo '<span>';
											echo '<span>';
											echo 'US ';
											echo get_post_meta(get_the_ID(),'product_price', true);
											echo '</span>';
											echo '<label>';
											echo 'Quantity';
											echo '</label>';
											echo '<input type="text" value="'.get_post_meta(get_the_ID(),'product_quantity', true).'"/>';
											echo '<button type="button" class="btn btn-fefault cart">';
											echo '<i class="fa fa-shopping-cart" style="padding-right:5px">';
											echo 'Add to cart';
											echo '</i>';
											echo '</button>';
											echo '</span>';
											echo '<p>';
											echo '<b>';
											echo 'Availability: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'availability', true);
											echo '</p>';
											echo '<p>';
											echo '<b>';
											echo 'Condition: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'product_condition', true);
											echo '</p>';
											echo '<p>';
											echo '<b>';
											echo 'Company: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'company', true);
											echo '</p>';
											
											
											    wp_reset_postdata();
										} else {
												
										}
?>
<!-- Results mobile2 features -->
<?php
 $product2 = new wp_query($args);

	if ( $product2->have_posts() ) {
		$product2->the_post();										
											
     			echo '<h2>'.get_the_title(get_the_ID()).'</h2>';
											echo '<p>';
											echo 'Web ID: ';
											echo get_post_meta(get_the_ID(),'product_web_id', true);
											echo '</p>';
											/*echo get_theme_file_uri('/assets/images/product-details/rating.png');*/
											echo '<span>';
											echo '<span>';
											echo 'US ';
											echo get_post_meta(get_the_ID(),'product_price', true);
											echo '</span>';
											echo '<label>';
											echo 'Quantity';
											echo '</label>';
											echo '<input type="text" value="'.get_post_meta(get_the_ID(),'product_quantity', true).'"/>';
											echo '<button type="button" class="btn btn-fefault cart">';
											echo '<i class="fa fa-shopping-cart" style="padding-right:5px">';
											echo 'Add to cart';
											echo '</i>';
											echo '</button>';
											echo '</span>';
											echo '<p>';
											echo '<b>';
											echo 'Availability: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'availability', true);
											echo '</p>';
											echo '<p>';
											echo '<b>';
											echo 'Condition: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'product_condition', true);
											echo '</p>';
											echo '<p>';
											echo '<b>';
											echo 'Company: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'company', true);
											echo '</p>';
											
											
											    wp_reset_postdata();
										} else {
												
										}
?>



<?php
get_footer();
?>