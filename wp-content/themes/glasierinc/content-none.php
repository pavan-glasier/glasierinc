<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */
?>

<?php //get_search_form(); ?>




<div class="r-bg-a pt85 pb120">     
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-6">
                <div class="page-headings">
                    <h1 class="mb15"><?php _e( 'Nothing Found', 'glasierinc' ); ?></h1>
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
                    <h2 class="mb15"><?php _e( 'Nothing Found !', 'glasierinc' ); ?></h2>
                    <p> <?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'glasierinc' ); ?></p>
                    <a class="ree-btn ree-btn0 ree-btn-grdt2 mt40" href="<?=site_url();?>">HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>


