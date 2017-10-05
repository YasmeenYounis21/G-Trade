<?php
/**
 * Template Name: Compare
 * Created by PhpStorm.
 * User: Abdellatif
 * Date: 9/23/2017
 * Time: 10:57 ص
 */

get_header();

?>
<section class="cd-intro">
    <h1>Products Comparison</h1>
</section> <!-- .cd-intro -->

<section class="cd-products-comparison-table">
    <header>
        <h2>Compare Products</h2>

        <div class="actions">
            <a href="#0" class="reset">Reset</a>
            <a href="#0" class="filter">Filter</a>
        </div>
    </header>

    <div class="cd-products-table">
        <div class="features">
            <div class="top-info">Models</div>
            <ul class="cd-features-list">
                <li>Availability</li>
                <li>Color</li>
                <li>Price</li>
                <li>Opreating System</li>
                <li>Condition</li>
                <li>Company</li>
                <li>Type of screen</li>
            </ul>
        </div> <!-- .features -->

        <div class="cd-products-wrapper">
            <?php
            echo do_shortcode('[compare_products]');
            ?>
        </div> <!-- .cd-products-wrapper -->

        <ul class="cd-table-navigation">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
        </ul>
    </div> <!-- .cd-products-table -->
</section> <!-- .cd-products-comparison-table -->
<?php get_footer();?>
