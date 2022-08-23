<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */
?>
<style>
#process .content{
    background: #fcfcfc;
    padding: 35px;
    border-radius: 8px;
}
.float-right {
    float: right;
}
#process .content h1,
#process .content h2,
#process .content h3,
#process .content h4,
#process .content h5,
#process .content h6
{
	margin-bottom: 15px;
}
#process .content p
{
	margin-bottom: 20px;
}
#process .content input.form-control {
    height: calc(1.9em + .75rem + 2px);
}
#process .content .wpcf7-not-valid-tip {
    margin-top: 5px;
}
</style>

<div class="r-bg-a pt85 pb120">     
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-6">
                <div class="page-headings">
                    <h1 class="mb15"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sec-pad">
    <div id="process" class="work-process-area ">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12 info">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>

            <?php edit_post_link( __( 'Edit', 'glasierinc' ), '<span class="edit-link float-right">', '</span>' ); ?>
        </div>

    </div>
</div>







