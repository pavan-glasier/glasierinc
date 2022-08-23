<?php 

/**
* Template Name: Thank You Page
*
*/

get_header(); ?>

<!--contact info-->
<div class="contact-head-sec pt85">
   <div class="container">
        <div class="row ">
            <div class="col-lg-7 vcenter">
                <div class="page-headings">
                    <!-- <span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Let's Talk</span> -->
                    <h1 class="mb15"><?php echo the_content();?></h1>
                </div>
            </div>

            <div class="col-lg-5 vcenter">
                <div class="sol-img m-mt30">
                   <img src="<?=site_url();?>/wp-content/uploads/2022/04/2710476.png" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
   </div>
</div>

<?php get_footer(); ?>