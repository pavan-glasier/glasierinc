<?php 

/**
* Template Name: Lending Page
*
*/

get_header('lending');?>


<main id="main">
<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'banner_section' ) :
  $content_column = get_sub_field('content_column');
  $form_column = get_sub_field('form_column');
?>
   <section class="bg-img-full main-banner bg-img-parallax" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img05.jpg);" data-scroll-index="0">
      <span class="overlay"></span>
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7">
                <?php if(!empty($content_column['tag_line'])):?>
               <span class="title"><?php echo $content_column['tag_line'];?></span>
                <?php endif; ?>

                <?php if(!empty($content_column['title'])):?>
               <h1 class="heading text-uppercase"><?php echo $content_column['title'];?></h1>
               <span class="divider white"></span>
               <?php endif; ?>

               <?php 
                  $link_button = $content_column['link_button'];
                  if( $link_button ): 
                      $link_button_url = $link_button['url'];
                      $link_button_title = $link_button['title'];
                      $link_button_target = $link_button['target'] ? $link_button['target'] : '_self';
                      ?>
                     <div class="btn-holder">
                        <a href="<?php echo esc_url( $link_button_url ); ?>" class="btn btn-default main-bg-color text-uppercase" target="<?php echo esc_attr( $link_button_target ); ?>" data-scroll-nav="2"> <?php echo esc_html( $link_button_title ); ?></a>
                     </div>
                  <?php endif; ?>
               <span class="arrow" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/arrow.png);"></span>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5">
               <section class="quote-form" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img02.jpg);"
                  data-scroll-index="1">
                  <?php if(!empty($form_column['heading'])): ?>
                  <h2 class="form-heading text-center text-uppercase"><?php echo $form_column['heading'];?></h2>
                  <?php endif; ?>

                  <?php if(!empty($form_column['form_select'])): ?>
                    <?php echo do_shortcode('[contact-form-7 id="'.$form_column['form_select'].'" html_class="banner-form"]');?>
                  <?php endif;?>
               </section>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'about_section' ) :
  $about_heading = get_sub_field('heading');
  $about_description = get_sub_field('description');
  $about_image = get_sub_field('image');
  $about_contents = get_sub_field('contents');
?>
   <section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2">
      <div class="container">
         <header class="main-heading row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                <?php if(!empty($about_heading)): ?>
                <h2 class="heading text-uppercase"><?php echo $about_heading;?></h2>
                <span class="divider center"></span>
                <?php endif; ?>

                <?php if(!empty($about_description)): ?>
               <p><?php echo $about_description;?></p>
               <?php endif; ?>
            </div>
         </header>
         <div class="row">
            <div class="col-md-6">
                <?php if($about_image): ?>
                <img src="<?php echo esc_url( $about_image['url'] );?>" alt="<?php echo esc_attr( $about_image['alt'] );?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-6 mt-3 about-text">
               <?php echo $about_contents;?>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'what_people_say' ) :
  $people_say_heading = get_sub_field('heading');
  $testimonials = get_sub_field('testimonials');
    if($testimonials): ?>
    <section class="people-say" data-scroll-index="3">
        <div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img04.jpg);" data-scroll-index="3">
            <div class="container pad-top-xs">
                <div id="testim" class="testim">
                    <?php if(!empty($people_say_heading)): ?>
                    <header class="main-heading row">
                        <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                            <h2 class="heading text-uppercase"><?php echo $people_say_heading;?></h2>
                            <span class="divider center"></span>
                        </div>
                    </header>
                    <?php endif; ?>

                    <?php 
                      $testi_args = array(
                          'post_type' => 'testimonial',
                          'order' => 'DESC',
                         ); 
                         ?>
                    
                  <?php $tm_query = new WP_Query($testi_args);
                   if ($tm_query->have_posts()) : 
                    $countDot = 1;
                    $count = 1;
                    ?>
                    <div class="wrap">
                        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                        <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                        <ul id="testim-dots" class="dots" style="padding: 0;">
                            <?php while ($tm_query->have_posts()) : $tm_query->the_post(); ?>
                            <li class="dot <?php echo $retValDot = ($countDot == 1) ? 'active' : ''; ?>"></li>
                            <?php $countDot++; endwhile; ?>
                        </ul>
                        <div id="testim-content" class="cont">
                            <?php while ($tm_query->have_posts()) : $tm_query->the_post(); ?>
                            <div class="<?php echo $retVal = ($count == 1) ? 'active' : ''; ?>">
                                <div class="img">
                                    <?php 
                                    if ( has_post_thumbnail() ) { ?>
                                       <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="fill-fixed" />
                                    <?php }
                                    else { ?>
                                        <img src="<?=site_url();?>/wp-content/uploads/2022/03/no-image-icon-4.png" >
                                    <?php }
                                    ?>
                                </div>
                                <h2><?php echo the_title();?></h2>
                                <?php echo get_the_content();?>
                            </div>
                            <?php $count++; endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'services_section' ) :
  $services_heading = get_sub_field('heading');
  $services_description = get_sub_field('description');
  $services = get_sub_field('services');
    if($services): ?>
   <section class="services-section pad-top-lg pad-bottom-sm" data-scroll-index="4">
       <div class="container">
          <header class="main-heading row">
             <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                <?php if(!empty($services_heading)): ?>
                <h2 class="heading text-uppercase"><?php echo $services_heading;?></h2>
                <span class="divider center"></span>
                <?php endif; ?>

                <?php if(!empty($services_description)): ?>
               <p><?php echo $services_description;?></p>
               <?php endif; ?>
             </div>
          </header>
          <?php 
              $args = array(
                  'post_type' => 'services',
                  'order' => 'ASC',
                  'tax_query' => array(
                       array (
                          'taxonomy' => 'service_category',
                          'field' => 'id',
                          'terms' => 61,
                       )
                    ),
                 ); ?>
          <?php $ss_query = new WP_Query($args);
           if ($ss_query->have_posts()) :
            $serviceCount = 1;
            ?>
            <div class="row" style="display: flex;flex-wrap: wrap;row-gap: 30px;">
            <?php while ($ss_query->have_posts()) : $ss_query->the_post(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-5">
                    <div class="about-box">
                        <span class="num main-color">0<?php echo $serviceCount;?>.</span>
                        <span class="title text-uppercase"><?php the_title();?></span>
                        <span class="divider"></span>
                        <p>
                        <?php $content = get_the_content();
                           echo wp_trim_words($content, 22, "..."); ?> 
                        </p>
                        <a href="<?php the_permalink();?>" class="more main-color text-uppercase">READ MORE...</a>
                    </div>
                </div>
          <?php $serviceCount++; endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </div>
         <?php endif; ?>
       </div>
    </section>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'portfolio_section' ) :
  $portfolio_heading = get_sub_field('heading');
  $portfolio_description = get_sub_field('description');
  ?>
   <section class="bg-img-full price-section pad-top-lg pad-bottom-sm" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img02.jpg);" data-scroll-index="5">
      <div class="container">
         <header class="main-heading row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">

               <?php if(!empty($portfolio_heading)): ?>
                <h2 class="heading text-uppercase"><?php echo $portfolio_heading;?></h2>
                <span class="divider center"></span>
                <?php endif; ?>

                <?php if(!empty($portfolio_description)): ?>
               <p><?php echo $portfolio_description;?></p>
               <?php endif; ?>

            </div>
         </header>
         <div class="row">
            <?php
            if( have_rows('images') ):
            while( have_rows('images') ) : the_row();
            $image = get_sub_field('image'); ?>
            <div class="col-md-6 p-0">
               <div class="portfolio-box pad-bottom-sm">
                  <img src="<?php echo esc_url( $image['url'] );?>" alt="<?php echo esc_attr( $image['alt'] );?>">
               </div>
            </div>
            <?php endwhile; endif;?>
         </div>
      </div>
   </section>
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'get_a_quote' ) :
  $get_a_quote_tagline = get_sub_field('tagline');
  $get_a_quote_heading = get_sub_field('heading');
  $get_a_quote_description = get_sub_field('description');
  $get_a_quote_button = get_sub_field('button');
  ?>
   <section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-color: #032454;">
      <span class="overlay"></span>
      <div class="container">
         <div class="row">
            <div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-1 col-lg-push-2 text-center">
                <?php if(!empty($get_a_quote_tagline)): ?>
                <span class="subtitle"><?php echo $get_a_quote_tagline;?></span>
                <?php endif; ?>

                <?php if(!empty($get_a_quote_heading)): ?>
                <h2 class="heading text-uppercase"><?php echo $get_a_quote_heading;?></h2>
                <span class="divider center"></span>
                <?php endif; ?>

                <?php if(!empty($get_a_quote_description)): ?>
                <p><?php echo $get_a_quote_description;?></p>
                <?php endif; ?>

                <?php if($get_a_quote_button): ?>
                <button class="btn btn-default main-bg-color text-uppercase smooth"
                  data-scroll-nav="1"><?php echo $get_a_quote_button['title'];?></button>
                <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
   <?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'image_form_group' ) :
  $image_form_image = get_sub_field('image');
  $form_group = get_sub_field('form_group');
  ?>
   <section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="6">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
                <?php if($image_form_image): ?>
                <img src="<?php echo esc_url( $image_form_image['url'] );?>" alt="<?php echo esc_attr( $image_form_image['alt'] );?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-6 mt-3 about-text contect-form">
                <?php if($form_group):?>
               <section class="quote-form" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img02.jpg);">
                    <?php if(!empty($form_group['heading'])): ?>
                    <h2 class="form-heading text-center text-uppercase"><?php echo $form_group['heading'];?></h2>
                    <?php endif; ?>

                    <?php 
                    if(!empty($form_group['form'])): 
                        echo do_shortcode('[contact-form-7 id="'.$form_group['form'].'" html_class="image-form"]');
                    endif; ?>
               </section>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
      <?php endif; ?>
<?php endwhile; ?>


<?php 
$india_contact = get_field('india_contact', 'option');
$usa_contact = get_field('usa_contact', 'option');
$uk_contact = get_field('uk_contact', 'option');
$canada = get_field('canada', 'option');
?>
<!-- start locations -->
    <div class="location-home sec-pad">
        <div class="container">
            <div class="row justify-content-center">
            
               <?php if(!empty($usa_contact['address'])): ?>
                <div class="col-lg-3">
                    <div class="location-block- mt60">
                        <div class="loc-icon-nam">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/statue-of-liberty-america-svgrepo-com.svg" alt="new-usa">
                            <p><span class="ree-text rt40">USA</span></p>
                        </div>
                        <p class="pt20 pb20"><?php echo $usa_contact['address'];?></p>
                    </div>
                </div>
               <?php endif; ?>

               <?php if(!empty($uk_contact['address'])): ?>
                <div class="col-lg-3">
                    <div class="location-block- mt60">
                        <div class="loc-icon-nam">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/big-ben.svg" alt="big-ben">
                            <p><span class="ree-text rt40">UK</span></p>
                        </div>
                        <p class="pt20 pb20"><?php echo $uk_contact['address'];?></p>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if(!empty($canada['address'])): ?>
                <div class="col-lg-3">
                    <div class="location-block- mt60">
                        <div class="loc-icon-nam">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/canada.png" alt="canada">
                            <p><span class="ree-text rt40">Canada</span></p>
                        </div>
                        <p class="pt20 pb20"><?php echo $canada['address'];?></p>
                    </div>
                </div>
               <?php endif; ?>
                
                <?php if(!empty($india_contact['address'])): ?>
                <div class="col-lg-3">
                    <div class="location-block- mt60">
                        <div class="loc-icon-nam">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/new-delhi.svg" alt="new-delhi">
                            <p><span class="ree-text rt40">India</span></p>
                        </div>
                        <p class="pt20 pb20"><?php echo $india_contact['address'];?></p>
                    </div>
                </div>
               <?php endif; ?>
                
                
            </div>
        </div>
    </div>
    <!-- end locations -->

</main>


<?php get_footer('lending'); ?>