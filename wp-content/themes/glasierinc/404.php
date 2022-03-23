<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header(); ?>



<div class="r-bg-a pt85 pb120">     
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-6">
                <div class="page-headings">
                    <h1 class="mb15">404</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15"><?php _e( 'Not Found !', 'glasierinc' ); ?></h2>
                    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'glasierinc' ); ?>.</p>
                    <a class="ree-btn ree-btn0 ree-btn-grdt2 mt40" href="<?=site_url();?>">HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
