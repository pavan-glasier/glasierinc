<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header(); ?>

<section class="inner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 inner-header">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
