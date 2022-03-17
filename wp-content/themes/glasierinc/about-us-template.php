<?php 

/**
* Template Name: About Us
*
*/

get_header();?>
<!-- Header title -->
<section class="header-title head-opacity" data-background="<?php echo get_template_directory_uri(); ?>/images/office.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 class="mb15"><?php the_title();?></h2>
                <p class="h-light"><?php echo get_the_content();?></p>
            </div>          
        </div>
    </div>
</section>
<!-- Header title end -->

<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'who_we_are' ) :
  $tagline = get_sub_field('tagline');
  $heading = get_sub_field('heading');
  $content = get_sub_field('content');
  $image = get_sub_field('image');
?>
<!--page head-->
<section class="page-heading-sec about-pag-head sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-heading mr25">
                    <?php if(!empty($tagline)): ?>
                    <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">
                        <?php echo $tagline;?>
                    </span>
                    <?php endif; ?>

                    <?php if(!empty($heading)): ?>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                       <?php echo $heading;?>
                    </h2>
                    <?php endif; ?>

                    <?php if(!empty($content)): ?>
                    <p class="mt30" data-aos="fade-up" data-aos-delay="600">
                        <?php echo $content;?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($image)): ?>
            <div class="col-lg-6">
                <div class="sol-img m-mt30">
                    <img src="<?php echo $image; ?>" alt="Glasier office" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
                </div>
            </div>
            <?php endif; ?>
        </div>
        
    </div>
</section>
<!--page head end-->
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'about' ) :
  $about_tagline = get_sub_field('about_tagline');
  $about_heading = get_sub_field('heading');
  $description = get_sub_field('description');
  $counter = get_sub_field('counter');
?>
<!--about company-->
<section class="r-bg-c sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-headings side-pghd">
                    <?php if(!empty($about_tagline)): ?>
                    <span class="sub-heading mb15"><?php echo $about_tagline;?></span>
                    <?php endif ?>

                    <?php if(!empty($about_heading)): ?>
                    <h2><?php echo $about_heading;?></h2>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-lg-8">
                <?php if(!empty($description)): ?>
                <!-- <h4 class="mb15">Reevan is a full-service web, app and digital marketing company based in India.</h4> -->
                <p><?php echo $description;?></p>
                <?php endif ?>

                <?php if($counter): 
                    $count_1 = $counter['count_1'];
                    $count_2 = $counter['count_2'];
                    $count_3 = $counter['count_3'];
                    $count_4 = $counter['count_4'];
                    ?>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="company-stats2 roww mt30">
                            <?php if($count_1): ?>
                            <div class="statsnum counter-number "> 
                                <p><?php echo $count_1['text'];?></p>
                                <span class="counter"><?php echo $count_1['number'];?></span>
                                <span><?php echo $count_1['affix'];?></span>
                            </div>
                            <?php endif ?>
                            
                            <?php if($count_2): ?>
                            <div class="statsnum counter-number "> 
                                <p><?php echo $count_2['text'];?></p>
                                <span class="counter"><?php echo $count_2['number'];?></span>
                                <span><?php echo $count_2['affix'];?></span>
                            </div>
                            <?php endif ?>

                            <?php if($count_3): ?>
                            <div class="statsnum counter-number "> 
                                <p><?php echo $count_3['text'];?></p>
                                <span class="counter"><?php echo $count_3['number'];?></span>
                                <span><?php echo $count_3['affix'];?></span>
                            </div>
                            <?php endif ?>

                            <?php if($count_4): ?>
                            <div class="statsnum counter-number "> 
                                <p><?php echo $count_4['text'];?></p>
                                <span class="counter"><?php echo $count_4['number'];?></span>
                                <span><?php echo $count_4['affix'];?></span>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>  
                <?php endif ?>

            </div>
        </div>
    </div>
</section>
<!--about company end-->
<?php endif ?>
<?php endwhile; ?>



<?php get_footer(); ?>