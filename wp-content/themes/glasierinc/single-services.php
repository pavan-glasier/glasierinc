<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header(); ?>

<?php $main_heading = get_field('main_heading');?>
<?php $description = get_field('description');?>
<!-- Header title -->
<section class="header-title head-opacity" data-background="<?php echo site_url(); ?>/wp-content/uploads/2022/04/Common-Banner.png">
    <div class="container">
        <div class="row justify-content-center align-items-center">
           <div class="col-lg-5">
            <?php if(!empty($main_heading)): ?>
              <h1 class="mb15"><?php echo $main_heading;?></h1>
            <?php else: ?>
                <h1 class="mb15"><?php echo the_title();?></h1>
            <?php endif; ?>

            <?php if(!empty($description)): ?>
              <p class="h-light">
                <?php echo $description;?>
              </p>
              <?php endif; ?>
           </div>

           <div class="col"></div>
           <div class="col-lg-6">
                <div class="form-contact-hom service-form">
                    <div class="form-block">
                        <?php //if(!empty($contact_form['form'])): ?>
                        <div class="form-body">
                            <?php echo do_shortcode('[contact-form-7 id="1742" ]');?>
                        </div>
                        <?php //endif; ?>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
<!-- Header title end -->


<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'website_performance' ) : 
      $website_performance_image = get_sub_field('image');
      $title_content_group = get_sub_field('title_content_group');
      ?>
<!--Start About-->
<section class="service pad-tb1 bg-gradient5">
    <div class="container">
        <div class="row align-items-center">
            <?php if (!empty($website_performance_image)): ?>
            <div class="col-lg-4">
                <div class="image-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <img src="<?php echo $website_performance_image;?>" alt="image" class="img-fluid no-shadow w-100">
                </div>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($title_content_group)): ?>
            <div class="col-lg-8 block-1">
                <div class="common-heading text-lg-left text-justify ">
                    <!-- <span>Overview</span> -->
                    
                    <?php if (!empty($title_content_group['title'])): ?>
                    <h2><?php echo $title_content_group['title'];?></h2>
                    <?php endif; ?>

                    <?php if (!empty($title_content_group['contents'])): ?>
                    <p> 
                        <?php echo $title_content_group['contents'];?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>
<!--End About-->
<?php endif ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'advantages' ) : 
  $advantages_contents = get_sub_field('contents');
  $advantages_points = get_sub_field('advantages_points');
  ?>
<!--Start Section 3-->
<section class="service dark-bg4 pad-tb1">
    <div class="container">
        <div class="row">
            <?php if ($advantages_contents): ?>
            <div class="col-lg-7">
                <div class="text-l service-desc- pr25">
                    <?php if($advantages_contents['title']): ?>
                    <h3><?php echo $advantages_contents['title'];?></h3>
                    <?php endif; ?>
                    <!-- <h5 class="mt10 mb20">Hire Expert Cross Platform Mobile App Developers to Boost Your Business </h5> -->

                    <?php if($advantages_contents['content']): ?>
                    <p class="mt10 mb20">
                      <?php echo $advantages_contents['content'];?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($advantages_points): ?>
            <div class="col-lg-5">
                <div class="servie-key-points">
                    <?php if(!empty($advantages_points['heading'])): ?>
                    <h4><?php echo $advantages_points['heading'];?></h4>
                    <?php endif; ?>

                    <?php $points = $advantages_points['points'];
                    if( $points ) { ?>
                        <ul class="key-points mt20">
                        <?php foreach( $points as $point ) { ?>
                            <li><?php echo $point['point'];?></li>
                        <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--End Section 3-->
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'technologies_icons' ) : 
  ?>
<?php
// Check rows exists.
if( have_rows('icons') ):
    while( have_rows('icons') ) : the_row();
        //echo get_sub_field('icon');
    endwhile;
endif; ?>

<?php endif ?>
<?php endwhile; ?>
<!--Start Logo Section-->
<div class="techonology-used-">
    <div class="container">
        <ul class="h-scroll tech-icons">
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon1.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon2.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon3.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon4.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon5.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon6.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon7.png" alt="icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/stack-icon8.png" alt="icon"></a></li>
        </ul>
    </div>
</div>
<!-- End Logo Section-->



<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'our_services' ) : 
  $service_heading = get_sub_field('main_heading');
  $service_description = get_sub_field('service_description');
  ?>
<!-- Start Our Servoces-->
<section class="service-block bg-gradient6 pad-tb1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <!-- <span style="color: #fff;">Service</span> -->
                    <?php if (!empty($service_heading)): ?>
                        <h2 style="color: #fff;"><?php echo $service_heading;?></h2>
                    <?php endif; ?>
                    
                    <?php if (!empty($service_description)): ?>
                    <p class="mb30" style="color: #fff;"><?php echo $service_description;?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row upset link-hover">
            <?php if( have_rows('services') ):
                while( have_rows('services') ) : the_row(); ?>
            <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="s-block wide-sblock">
                    <?php if(!empty(get_sub_field('service_image'))): ?>
                    <div class="s-card-icon-large">
                        <img src="<?php echo get_sub_field('service_image');?>" alt="service" class="img-fluid">
                    </div>
                    <?php endif; ?>

                    <div class="s-block-content-large">
                        <?php if(!empty(get_sub_field('service_title'))): ?>
                        <h4><?php echo get_sub_field('service_title');?></h4>
                        <?php endif; ?>

                        <?php if(!empty(get_sub_field('service_description'))): ?>
                        <p><?php echo get_sub_field('service_description');?> </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile;
                endif; ?>
        </div>
        <!-- <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: zoomInDown;">
                <p style="color: #fff;">Hire a <span>Dedicated Developer</span></p>
                <a href="javascript:void(0)" class="btn-outline">Estimate Project 
                    <i class="fas fa-chevron-right fa-icon"></i>
                </a>
            </div>
        </div> -->
    </div>
</section>
<!-- End Over Services-->
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'hire_for_projects' ) : 
      $hire_pro_contents = get_sub_field('contents');
      $hire_pro_image = get_sub_field('image');
      ?>
<!--start cta-->
<section class="r-bg-x sec-pad">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading">
                        <?php if(!empty($hire_pro_contents['heading'])): ?>
                        <h2 class="mb15">
                            <?php echo $hire_pro_contents['heading'];?>
                        </h2>
                        <?php endif; ?>

                        <?php if(!empty($hire_pro_contents['description'])): ?>
                        <p><?php echo $hire_pro_contents['description'];?></p>
                         <?php endif; ?>

                         
                         <?php $hire_button = $hire_pro_contents['hire_button']; 
                         if ($hire_button) : 
                            $link_target = $hire_button['target'] ? $hire_button['target'] : '_self';
                         ?>
                        <div class="mult-btns">
                           <a href="<?php echo $hire_button['url'];?>" class="ree-btn  ree-btn-grdt1 mt40" target="<?php echo $link_target;?>" ><?php echo $hire_button['title'];?> <i
                              class="fas fa-arrow-right fa-btn"></i></a>
                            <?php if(!empty($hire_pro_contents['phone'])): ?>
                           <span class="or">or</span>
                           <a href="tel:<?php echo str_replace(' ','',$hire_pro_contents['phone']); ?>" class="mt40 call-us">Call Us <?php echo $hire_pro_contents['phone'];?></a>
                           <?php endif;?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php if(!empty($hire_pro_image)): ?>
                <div class="col-lg-6 vcenter text-center">
                    <div class="sol-img-png">
                        <img src="<?php echo $hire_pro_image; ?>" alt="app" class="img-fluid">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--start cta-->
<?php endif ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'work_process' ) : 
      $work_process_heading = get_sub_field('heading');
      $process_description = get_sub_field('process_description');
      $desktop = get_sub_field('desktop');
      $mobile = get_sub_field('mobile');
      $process_icons = $mobile['process_icons'];
          $process_1 = $process_icons['process_1'];
          $process_2 = $process_icons['process_2'];
          $process_3 = $process_icons['process_3'];
          $process_4 = $process_icons['process_4'];
          $process_5 = $process_icons['process_5'];
          $process_6 = $process_icons['process_6'];
      ?>
<!--Start App Development Process-->
<section class="service-block pad-tb1 pb-0 light-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                 <!-- <span>Process</span> -->
                    <?php if (!empty($work_process_heading)): ?>
                    <h2 class="mb15"><?php echo $work_process_heading;?></h2>
                    <?php endif; ?>

                    <?php if (!empty($process_description)): ?>
                    <p><?php echo $process_description;?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 70px;"></div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="common-heading ptag dis-desktop">
                    <div class="content-desk-text">
                        <?php if (!empty($desktop['image'])): ?>
                        <img src="<?php echo $desktop['image'];?>">
                        <?php endif; ?>
                        
                        <div class="row first-section">
                            
                            <?php if (!empty($process_1['title'])): ?>
                            <div class="col-md-4 text-content-idea">
                                <div class="text-heading">
                                    <h2>01</h2>
                                    <h6><?php echo $process_1['title'];?></h6>
                                </div>
                                <p><?php echo $process_1['content'];?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($process_3['title'])): ?>
                            <div class="col-md-4 text-content-idea">
                                <div class="text-heading">
                                    <h2>03</h2>
                                    <h6><?php echo $process_3['title'];?></h6>
                                </div>
                                <p><?php echo $process_3['content'];?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($process_5['title'])): ?>
                            <div class="col-md-4 text-content-idea">
                                <div class="text-heading">
                                    <h2>05</h2>
                                    <h6><?php echo $process_5['title'];?></h6>
                                </div>
                                <p><?php echo $process_5['content'];?></p>
                            </div>
                            <?php endif; ?>

                        </div>

                        <div class="row second-section">
                            
                            <?php if (!empty($process_2['title'])): ?>
                            <div class="col-md-4 text-content-idea">
                                <div class="text-heading">
                                    <h2>02</h2>
                                    <h6><?php echo $process_2['title'];?></h6>
                                </div>
                                <p><?php echo $process_2['content'];?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($process_4['title'])): ?>
                            <div class="col-md-4 text-content-idea">
                                <div class="text-heading">
                                    <h2>04</h2>
                                    <h6><?php echo $process_4['title'];?></h6>
                                </div>
                                <p><?php echo $process_4['content'];?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($process_6['title'])): ?>
                            <!-- <div class="col-md-4 text-content-idea">
                                <div class="text-heading">
                                    <h2>06</h2>
                                    <h6><?php echo $process_6['title'];?></h6>
                                </div>
                                <p><?php echo $process_6['content'];?></p>
                            </div> -->
                            <?php endif; ?>

                        </div>
                    </div>
            
                </div>
           <div class="dis-mobile">
              <div class="row">
                <?php if (!empty($process_1['title'])): ?>
                 <div class="col-md-12 mb-20">
                    <div class="content-text text-center">
                        <img src="<?php echo $process_1['icon'];?>">
                        <div class="content-heading">
                            <h2>01</h2>
                            <h6><?php echo $process_1['title'];?></h6>
                        </div>
                        <p><?php echo $process_1['content'];?></p>
                    </div>
                 </div>
                 <?php endif; ?>
                
                <?php if (!empty($process_2['title'])): ?>
                 <div class="col-md-12 mb-20">
                    <div class="content-text text-center">
                        <img src="<?php echo $process_2['icon'];?>">
                        <div class="content-heading">
                            <h2>02</h2>
                            <h6><?php echo $process_2['title'];?></h6>
                        </div>
                        <p><?php echo $process_2['content'];?></p>
                    </div>
                 </div>
                 <?php endif; ?>
                <?php if (!empty($process_3['title'])): ?>
                 <div class="col-md-12 mb-20">
                    <div class="content-text text-center">
                        <img src="<?php echo $process_3['icon'];?>">
                        <div class="content-heading">
                            <h2>03</h2>
                            <h6><?php echo $process_3['title'];?></h6>
                        </div>
                        <p><?php echo $process_3['content'];?></p>
                    </div>
                 </div>
                 <?php endif; ?>

                 <?php if (!empty($process_4['title'])): ?>
                 <div class="col-md-12 mb-20">
                    <div class="content-text text-center">
                        <img src="<?php echo $process_4['icon'];?>">
                        <div class="content-heading">
                            <h2>04</h2>
                            <h6><?php echo $process_4['title'];?></h6>
                        </div>
                        <p><?php echo $process_4['content'];?></p>
                    </div>
                 </div>
                 <?php endif; ?>

                <?php if (!empty($process_5['title'])): ?>
                 <div class="col-md-12 mb-20">
                    <div class="content-text text-center">
                        <img src="<?php echo $process_5['icon'];?>">
                        <div class="content-heading">
                            <h2>05</h2>
                            <h6><?php echo $process_5['title'];?></h6>
                        </div>
                        <p><?php echo $process_5['content'];?></p>
                    </div>
                 </div>
                 <?php endif; ?>

                <?php if (!empty($process_6['title'])): ?>
                 <div class="col-md-12 mb-20">
                    <div class="content-text text-center">
                        <img src="<?php echo $process_6['icon'];?>">
                        <div class="content-heading">
                            <h2>06</h2>
                            <h6><?php echo $process_6['title'];?></h6>
                        </div>
                        <p><?php echo $process_6['content'];?></p>
                    </div>
                 </div>
                 <?php endif; ?>
              </div>
           </div>
        </div>
     </div>
    </div>
</section>
<!--End App Development Process-->
<?php endif ?>
<?php endwhile; ?>


<?php
if( have_rows('industries_we_serve', 'option') ):
   while( have_rows('industries_we_serve', 'option') ) : the_row(); 
    $we_serve_heading = get_sub_field('we_serve_heading');
      $we_serve_description = get_sub_field('we_serve_description');
      $we_serve_description_more = get_sub_field('we_serve_description_more');
    ?>
<!--Industries-->
<section class="featured-project sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <?php if (!empty($we_serve_heading)): ?>
                        <h2 class="mb15"><?php echo $we_serve_heading;?></h2>
                    <?php endif; ?>

                    <?php if (!empty($we_serve_description)): ?>
                    <p><?php echo $we_serve_description;?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row mt30">
            <?php
            if( have_rows('industries') ):
                while( have_rows('industries') ) : the_row(); ?>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="<?php echo get_sub_field('industry_icon');?>" alt="img">
                    <h6><?php echo get_sub_field('industry_name');?></h6>
                </div>
            </div>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="row mt30 justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <?php if (!empty($we_serve_description_more)): ?>
                    <p><?php echo $we_serve_description_more;?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Industries end-->

<?php endwhile; ?>
<?php endif ?>



<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'why_choose_section' ) : 
      $why_choose_image = get_sub_field('why_choose_image');
      $why_choose_head = get_sub_field('why_choose_head');
      ?>
<section class="r-bg-x zup pad-tb1">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <?php if (!empty($why_choose_image)): ?>
            <div class="col-lg-4">
                <div class="sol-img m-mt30">
                    <img src="<?php echo $why_choose_image; ?>" alt="reevan office" class="img-fluid">
                </div>
            </div>
            <?php endif; ?>
            <div class="col-lg-7">
                <div class="pera-block ml50">
                    <?php if (!empty($why_choose_head['why_choose_heading'])): ?>
                    <h2><?php echo $why_choose_head['why_choose_heading'];?></h2>
                    <?php endif; ?>

                    <?php if (!empty($why_choose_head['why_choose_description'])): ?>
                    <p><?php echo $why_choose_head['why_choose_description'];?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if( have_rows('why_choose') ): ?>
        <div class="row mt30">
            <?php while( have_rows('why_choose') ) : the_row(); ?>
            <div class="col-lg-4 mt30">
                <div class="pera-block ml50">
                    <h4><?php echo get_sub_field('why_choose_title');?></h4>
                    <p><?php echo get_sub_field('why_choose_content');?></p>
                </div>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'our_projects' ) : 
      $project_tagline = get_sub_field('project_tagline');
      $project_heading = get_sub_field('project_heading');
      $project_description = get_sub_field('project_description');
      $project_id = get_sub_field('projects');
      $view_all_project = get_sub_field('view_all_project');
      ?>

<!-- Start Some of Our Works-->
<section class="r-bg-x pad-tb1" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span><?php echo $project_tagline;?></span>
                    <h2><?php echo $project_heading;?></h2>
                    <p class="mb0"><?php echo $project_description;?></p>
                </div>
            </div>
        </div>
        <?php 
         $project_args = array(
             'post_type' => 'portfolio',
             'order' => 'DESC',
             'tax_query' => array(
                  array (
                     'taxonomy' => 'portfolio_category',
                     'field' => 'id',
                     'terms' => $project_id,
                  )
               ),
            ); ?>
      <?php $project_query = new WP_Query($project_args);
       if ($project_query->have_posts()) : ?>
        <div class="row">
        <?php while ($project_query->have_posts()) : $project_query->the_post(); ?>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale" style="pointer-events: none;">
                    <div class="item-image">
                        <a href="<?php the_permalink();?>">
                         <?php 
                         if ( has_post_thumbnail() ) { ?>
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>" />
                         <?php }
                         else { ?>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/Image_not_available.png" alt="<?php echo get_the_title(); ?>" />
                         <?php }
                         ?>
                      </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <p><?php 
                         $term_obj_list = get_the_terms( $post->ID, 'portfolio_category' );
                         echo $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                         ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <?php if($view_all_project):?>
        <div class="row">
            <div class="col-lg-12 maga-btn mt60">
                <a href="<?php echo $view_all_project['url'];?>" class="btn-outline"><?php echo $view_all_project['title'];?> <i
                 class="fas fa-chevron-right fa-icon"></i></a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- End Some of Our Works-->
<?php endif ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'client_testimonial' ) : 
      $testimonial_heading = get_sub_field('testimonial_heading');
      $testimonial_description = get_sub_field('testimonial_description');
      $testimonial_id = get_sub_field('testimonial');
      ?>
<!--Start reveiws-->
<section class="reviews-block bg-gradient6 pad-tb1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <?php if(!empty($testimonial_heading)): ?>
                    <h2 style="color: #fff;"><?php echo $testimonial_heading;?></h2>
                    <?php endif; ?>

                    <?php if(!empty($testimonial_description)): ?>
                    <p class="mb30" style="color: #fff;"><?php echo $testimonial_description;?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
            <?php 
                  $testi_args = array(
                      'post_type' => 'testimonial',
                      'order' => 'DESC',
                      'posts_per_page' => 3,
                      'tax_query' => array(
                           array (
                              'taxonomy' => 'testi_category',
                              'field' => 'id',
                              'terms' => $testimonial_id,
                           )
                        ),
                     ); ?>
                
              <?php $tm_query = new WP_Query($testi_args);
               if ($tm_query->have_posts()) : ?>
            <div class="row">
                <?php while ($tm_query->have_posts()) : $tm_query->the_post(); ?>
                <div class="col-md-4 mt30">
                    <div class="reviews-card pr-shadow">
                        <div class="row v-center">
                            <div class="col">
                                <span class="revbx-lr"><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div>
                        <div class="review-text">
                            <?php echo the_content();?>
                        </div>
                        <div class="-client-details-">
                            <div class="reviewer-text">
                                <h4><?php echo the_title();?></h4>
                                <p><?php echo the_field('designation');?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    </div>
</section>
<!--End reveiws-->
<?php endif ?>
<?php endwhile; ?>

<section class="r-bg-a sec-pad">
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15">FAQ's</h2>
                    <p>Throughout our extensive experience, we have served companies of all sizes and types in many industries,</p>
                </div>
            </div>
        </div>
      <div class="row justify-content-center mt30">
         <div class="col-lg-10">
            <div class="feature-list">
               <div id="accordionExample" class="accordion ac-1">
                  <!-- Accordion item 1 -->
                  <div class="cards">
                     <div id="heading1" class="card-header">
                        <h6 class="mb-0 "><a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" class="d-block  collapsed  collapsible-link">GPS Tracking devices are enabled with real-time monitoring</a></h6>
                     </div>
                     <div id="collapse1" aria-labelledby="heading1" data-parent="#accordionExample" class="collapse show">
                        <div class="card-body p-4">
                           <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Accordion item 2 -->
                  <div class="cards">
                     <div id="heading2" class="card-header">
                        <h6 class="mb-0 "><a href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" class="d-block  collapsed  collapsible-link">Flexible Project settings</a></h6>
                     </div>
                     <div id="collapse2" aria-labelledby="heading2" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-4">
                           <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Accordion item 3 -->
                  <div class="cards">
                     <div id="heading3" class="card-header">
                        <h6 class="mb-0 "><a href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" class="d-block  collapsed  collapsible-link">Integrated Store Publishing</a></h6>
                     </div>
                     <div id="collapse3" aria-labelledby="heading3" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-4">
                           <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Accordion item 4 -->
                  <div class="cards">
                     <div id="heading4" class="card-header">
                        <h6 class="mb-0 "><a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" class="d-block  collapsed  collapsible-link">Visual Layout Components</a></h6>
                     </div>
                     <div id="collapse4" aria-labelledby="heading4" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-4">
                           <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Accordion item 5 -->
                  <div class="cards">
                     <div id="heading5" class="card-header">
                        <h6 class="mb-0 "><a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" class="d-block  collapsed  collapsible-link">Dynamic Components (feed via the CMS)</a></h6>
                     </div>
                     <div id="collapse5" aria-labelledby="heading5" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-4">
                           <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Accordion item 6 -->
                  <div class="cards">
                     <div id="heading6" class="card-header">
                        <h6 class="mb-0 "><a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" class="d-block  collapsed  collapsible-link">Shopping Cart and Payments</a></h6>
                     </div>
                     <div id="collapse6" aria-labelledby="heading6" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-4">
                           <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<?php
if( have_rows('call_to_action', 'option') ):
   while( have_rows('call_to_action', 'option') ) : the_row(); 
    $cta_tagline = get_sub_field('cta_tagline');
      $cta_heading = get_sub_field('cta_heading');
      $cta_link = get_sub_field('cta_link');
      $cta_phone_no = get_sub_field('cta_phone_no');
    ?>
<!--Start CTA-->
<section class="cta-area pad-tb1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <?php if (!empty($cta_tagline)): ?>
                        <span><?php echo $cta_tagline; ?></span>
                    <?php endif; ?>
                    
                    <?php if (!empty($cta_heading)): ?>
                    <h2><?php echo $cta_heading; ?></h2>
                    <?php endif; ?>

                    <?php if($cta_link):
                        $cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
                    ?>
                    <a href="<?php echo $cta_link['url'];?>" class="btn-outline" target="<?php echo $cta_link_target;?>" ><?php echo $cta_link['title'];?>
                        <i class="fas fa-chevron-right fa-icon"></i>
                    </a>
                    <?php endif; ?>
                    
                        <?php
						$country = getCountry();
                        $india_contact = get_field('india_contact', 'option');
                        $usa_contact = get_field('usa_contact', 'option');
                        $uk_contact = get_field('uk_contact', 'option');
                     ?>
                     <?php if($country == 'India'): ?>
                        <?php if (!empty($india_contact['phone'])): ?>
                            <p class="cta-call">Or call us now 
                                <a href="tel:<?php echo str_replace(' ','',$india_contact['phone']); ?>">
                                    <i class="fas fa-phone-alt"></i> <?php echo $india_contact['phone']; ?>
                                </a>
                            </p>
                        <?php endif; ?>

                    <?php elseif($country == 'United States'): ?>
                        <?php if (!empty($usa_contact['phone'])): ?>
                            <p class="cta-call">Or call us now 
                                <a href="tel:<?php echo str_replace(' ','',$usa_contact['phone']); ?>">
                                    <i class="fas fa-phone-alt"></i> <?php echo $usa_contact['phone']; ?>
                                </a>
                            </p>
                        <?php endif; ?>

                    <?php else: ?>
                        <?php if (!empty($uk_contact['phone'])): ?>
                            <p class="cta-call">Or call us now 
                                <a href="tel:<?php echo str_replace(' ','',$uk_contact['phone']); ?>">
                                    <i class="fas fa-phone-alt"></i> <?php echo $uk_contact['phone']; ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-a1">
        <img src="<?=site_url();?>/wp-content/uploads/2022/03/shape-3.svg" alt="shape" style="filter: hue-rotate(175deg);" />
    </div>
    <div class="shape shape-a2">
        <img src="<?=site_url();?>/wp-content/uploads/2022/03/shape-4.svg" alt="shape" style="filter: hue-rotate(100deg);" >
    </div>
    <div class="shape shape-a3">
        <img src="<?=site_url();?>/wp-content/uploads/2022/03/shape-13.svg" alt="shape">
    </div>
    <div class="shape shape-a4">
        <img src="<?=site_url();?>/wp-content/uploads/2022/03/shape-11.svg" alt="shape">
    </div>
</section>
<!--End CAT-->
<?php endwhile; ?>
<?php endif ?>


<?php get_footer(); ?>
