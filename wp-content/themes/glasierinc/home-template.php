<?php 

/**
* Template Name: Home
*
*/

get_header();?>

    <!--start Hero Section  -->
    <section class="home-hero slide-hero">
        <div class="hero-owl owl-carousel">

         <?php
           if( have_rows('slide', 'option') ):
               while( have_rows('slide', 'option') ) : the_row(); ?>
                  <?php $content_type = get_sub_field('content_type');?>
                  <?php $slider_image = get_sub_field('image');?>
           
               <div class="slide owlbg11">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6 col-sm-12 vcenter">
                            <div class="hero-content-x">
                                <p class="mb10 ree-tt"><?php echo $content_type['sub_title'];?></p>
                                <h1 class="mb30" data-aos="fade-in" data-aos-delay="200">
                                 <?php echo $content_type['title'];?>
                                 </h1>
                                <p data-aos="fade-in" data-aos-delay="500">
                                 <?php echo $content_type['description'];?>
                                </p>
                                <?php 
                                 $slider_link_btn = $content_type['link_button'];
                                 if( $slider_link_btn ): 
                                     $slider_link_btn_url = $slider_link_btn['url'];
                                     $slider_link_btn_title = $slider_link_btn['title'];
                                     $slider_link_btn_target = $slider_link_btn['target'] ? $slider_link_btn['target'] : '_self';
                                     ?>
                                <a href="<?php echo esc_url( $slider_link_btn_url ); ?>" class="ree-btn ree-btn-grdt1 mt40 mw-80" target="<?php echo esc_attr( $slider_link_btn_target ); ?>"><?php echo esc_html( $slider_link_btn_title ); ?><i class="fas fa-arrow-right fa-btn"></i></a>
                                 <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 vcenter">
                            <div class="sol-image m-mt30">
                                <img src="<?php echo $slider_image;?>" alt="web development" class="img-fluid"
                                    data-aos="fade-in" data-aos-delay="400">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
           endif; ?>

        </div>
    </section>
    <!--hero Section End-->

<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'about_us_section' ) :
  $about_us_contents = get_sub_field('about_us_contents');
  $about_us_boxes = get_sub_field('about_us_boxes');

?>
    <!--start home-about  -->
    <section class="home-about sec-pad r-bg-a">
        <div class="container">
            <div class="row">
               <?php if($about_us_contents):?>
                <div class="col-lg-6">
                    <div class="about-content-home m-mb60 pera-block">
                     <?php if(!empty($about_us_contents['tagline'])):?>
                        <span class="sub-heading mb15"><?php echo $about_us_contents['tagline'];?></span>
                     <?php endif; ?>

                     <?php if(!empty($about_us_contents['about_heading'])):?>
                        <h2><?php echo $about_us_contents['about_heading'];?></h2>
                     <?php endif; ?>

                     <?php if(!empty($about_us_contents['about_description'])):?>
                        <p><?php echo $about_us_contents['about_description'];?></p>
                     <?php endif; ?>
                        <!-- <div class="company-budges mt60 mb60">

                            <div class="img-budges">
                              <img src="images/badge-a.png" alt="Awards badges" class="img-fluid">
                            </div>

                            <div class="img-budges">
                              <img src="images/badge-b.png" alt="Awards badges" class="img-fluid">
                            </div>

                            <div class="img-budges">
                              <img src="images/badge-c.png" alt="Awards badges" class="img-fluid">
                            </div>

                        </div> -->
                        <div class="btn-sets mt60">
                           <?php 
                           $about_link = $about_us_contents['about_link'];
                           if( $about_link ): 
                               $about_link_url = $about_link['url'];
                               $about_link_title = $about_link['title'];
                               $about_link_target = $about_link['target'] ? $about_link['target'] : '_self';
                               ?>
                           <a href="<?php echo esc_url( $about_link_url ); ?>" class="ree-btn ree-btn-grdt2 mr20" target="<?php echo esc_attr( $about_link_target ); ?>"> <?php echo esc_html( $about_link_title ); ?> <i class="fas fa-arrow-right fa-btn"></i></a> 
                           <?php endif; ?>

                            <!-- <div class="vid-btntitl">
                                <a href="https://www.youtube.com/watch?v=7e90gBu4pas?autoplay=1&amp;rel=0"
                                    class="ree-btn ree-btn-grdt1 ree-btn-round video-popup"><i
                                        class="fas fa-play"></i></a>
                                <div class="vide-btntitl vcenter">
                                    <p>Watch Video</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
               <?php endif; ?>

               <?php if($about_us_contents):?>
                <div class="col-lg-6">
                    <div class="company-stats">
                        <div class="row">
                           <?php 
                           $about_box_1 = $about_us_boxes['about_box_1'];
                           $about_box_2 = $about_us_boxes['about_box_2'];
                           $about_box_3 = $about_us_boxes['about_box_3'];
                           $about_box_4 = $about_us_boxes['about_box_4'];
                           
                           ?>
                            <div class="col-lg-6 col-6 m-pr7">
                              <?php if($about_box_1):?>
                                <div class="stats-box stat-bx-1" data-aos="fade-up" data-aos-delay="200">
                                    <span class="sub-heading mb20"><?php echo $about_box_1['box_title'];?></span>
                                    <h3><?php echo $about_box_1['counter_no'];?></h3>
                                    <p class="mt20"> <?php echo $about_box_1['content'];?></p>
                                </div>
                                <?php endif; ?>
                                <?php if($about_box_3):?>
                                <div class="stats-box stat-bx-2 mt20" data-aos="fade-up" data-aos-delay="600">
                                    <span class="sub-heading mb20"><?php echo $about_box_3['box_title'];?></span>
                                    <h3><?php echo $about_box_3['counter_no'];?></h3>
                                    <p class="mt20"><?php echo $about_box_3['content'];?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-6 col-6 m-pl7">
                              <?php if($about_box_2):?>
                                <div class="stats-box stat-bx-3 mt100" data-aos="fade-up" data-aos-delay="400">
                                    <span class="sub-heading mb20"><?php echo $about_box_2['box_title'];?></span>
                                    <h3><?php echo $about_box_2['counter_no'];?></h3>
                                    <p class="mt20"><?php echo $about_box_2['content'];?></p>
                                </div>
                                <?php endif; ?>

                                <?php if($about_box_4):?>
                                <div class="stats-box stat-bx-4 mt20" data-aos="fade-up" data-aos-delay="800">
                                    <span class="sub-heading mb20"><?php echo $about_box_4['box_title'];?></span>
                                    <h3><?php echo $about_box_4['counter_no'];?></h3>
                                    <p class="mt20"><?php echo $about_box_4['content'];?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--home-about end-->
<?php endif ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'services' ) :
         $services_heading = get_sub_field('heading');
         $services_sub_heading = get_sub_field('sub_heading');
         $services_service = get_sub_field('service');
         $hire_developer = get_sub_field('hire_developer');
  ?>
      <!--start services-->
    <section class="r-bg-i sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sec-heading text-center pera-block">
                     <?php if(!empty($services_heading)) : ?>
                        <h2>
                           <?php echo $services_heading;?>
                        </h2>
                     <?php endif; ?>

                     <?php if(!empty($services_sub_heading)) : ?>
                        <p><?php echo $services_sub_heading;?></p>
                     <?php endif; ?>
                        
                    </div>
                </div>
            </div>
            
               <?php 
                  $args = array(
                      'post_type' => 'services',
                      'order' => 'ASC',
                      'tax_query' => array(
                           array (
                              'taxonomy' => 'service_category',
                              'field' => 'id',
                              'terms' => $services_service,
                           )
                        ),
                     ); ?>
                
              <?php $ss_query = new WP_Query($args);
               if ($ss_query->have_posts()) : ?>
               <div class="row mt30"> 
               <?php while ($ss_query->have_posts()) : $ss_query->the_post(); ?>
              
                  <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="ree-card r-bg-c mt60">
                        <div class="ree-card-img shadows">
                           <?php 
                           if ( has_post_thumbnail() ) { ?>
                              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  alt="<?php echo get_the_title(); ?>" />
                           <?php }
                           else { ?>
                              <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/no-image-icon-4.png" alt="<?php echo get_the_title(); ?>" />
                           <?php }
                           ?>
                        </div>
                        <div class="ree-card-content mt40">
                           <h3 class="mb15">
                              <a href="<?php the_permalink();?>"><?php the_title();?></a>
                           </h3>
                           <?php 
                           $content = get_the_content();
                           $trim_content = wp_trim_words($content, 20, ".")
                           ?>
                           <p>
                              <?php echo $content;?>
                           </p>
                        </div>
                        <div class="ree-card-content-link">
                            <a href="<?php the_permalink();?>" class="ree-card-link mt40">Read More 
                              <i class="fas fa-arrow-right fa-btn"></i>
                            </a>
                        </div>
                     </div>
                  </div>
             <?php endwhile; ?>
               </div>
            <?php wp_reset_postdata(); ?>
         <?php endif; ?>

            <?php if($hire_developer): ?>
            <div class="cta-block-wide mt100">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 vcenter">
                        <div class="cta-heading-wide-bt">
                           <h3><?php echo $hire_developer['content'];?></h3>
                           <?php $hire_button = $hire_developer['hire_button'];
                           if($hire_button):
                              $hire_button_target = $hire_button['target'] ? $hire_button['target'] : '_self';
                           ?>
                           <a href="<?php echo $hire_button['url'];?>" class="ree-btn ree-btn-grdt1 mw-80" target="<?php echo $hire_button_target;?>"><?php echo $hire_button['title'];?>
                              <i class="fas fa-arrow-right fa-btn"></i>
                           </a>
                           <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!--services end-->
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'our_work' ) :
         $our_work_heading = get_sub_field('heading');
         $our_work_tag_line = get_sub_field('tag_line');
         $our_work_work = get_sub_field('work');
         $view_all_work = get_sub_field('view_all_work');
  ?>
   <!--start work-->
    <section class="r-bg-f sec-pad">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-8 vcenter text-center">
                    <div class="heading-hz-btn">
                        <?php if(!empty($our_work_tag_line)) : ?>
                        <span class="sub-heading mb15" style="color: #fff;"><?php echo $our_work_tag_line;?></span>
                        <?php endif ?>

                        <?php if(!empty($our_work_heading)) : ?>
                        <h2 class="w-txt"><?php echo $our_work_heading;?></h2>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="row mt60">
                <div class="col-lg-12 vcenter">
                  <?php 
                     $work_args = array(
                         'post_type' => 'portfolio',
                         'order' => 'DESC',
                         'tax_query' => array(
                              array (
                                 'taxonomy' => 'portfolio_category',
                                 'field' => 'id',
                                 'terms' => $our_work_work,
                              )
                           ),
                        ); ?>
                   
                 <?php $ow_query = new WP_Query($work_args);
                  if ($ow_query->have_posts()) : ?>
                    <div id="full-work-app" class="full-work-app owl-nv owl-carousel">
                     <?php while ($ow_query->have_posts()) : $ow_query->the_post(); ?>
                        <div class="fwb-main-x fwb-a" style="pointer-events: none;">
                           <div class="work-thumbnails">
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
                           <div class="work-details">
                              <p class="mb10">
                                 <?php 
                                 $term_obj_list = get_the_terms( $post->ID, 'portfolio_category' );
                                 echo $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                                 ?>
                              </p>
                                <h4><a href="<?php the_permalink();?>"> <?php the_title();?></a> </h4>
                           </div>
                        </div>
                    <?php endwhile; ?>
                     </div>
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>
                </div>
            </div>
            <?php if($view_all_work):?>
            <div class="row justify-content-center text-center mt60">
                <div class="col-lg-10">
                    <div class="cta-heading-wide-bt">
                        <h3 class="w-txt"><?php echo $view_all_work['text'];?></h3>
                        <?php $view_all_button = $view_all_work['view_all_button'];
                        if($view_all_button):
                           $view_all_button_target = $view_all_button['target'] ? $view_all_button['target'] : '_self';
                        ?>
                        <a href="<?php echo $view_all_button['url'];?>" class="ree-btn ree-btn-grdt1 mw-80 no-shadows" target="<?php echo $view_all_button_target;?>" style="background-color: #fff; color: #005186;"><?php echo $view_all_button['title'];?>
                           <i class="fas fa-arrow-right fa-btn"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!--end work-->
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'technologies_we_work' ) :
         $technologies_heading = get_sub_field('heading');
         $technologies_description = get_sub_field('description');
  ?>
   <!--start technologies-->
      <section class="r-bg-x zup sec-pad">
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sec-heading text-center pera-block">
                        <?php if(!empty($technologies_heading)) : ?>
                        <h2><?php echo $technologies_heading;?></h2>
                        <?php endif ?>

                        <?php if(!empty($technologies_description)) : ?>
                        <p><?php echo $technologies_description;?> </p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 mt60">
                    <div class="tab-17 tabs-layout">
                     <?php
                     $a = 1;
                     
                     if( have_rows('technologies_tabs') ):  ?>
                        <ul class="nav nav-tabs justify-content-center" id="myTab3" role="tablist">
                     <?php while( have_rows('technologies_tabs') ) : the_row(); ?>
                           <li class="nav-item">
                              <a class="nav-link <?php echo $a == 1 ? 'active' : '' ?>"  data-toggle="tab" href="#tab<?php echo $a++;?>" role="tab" aria-selected="true"><?php echo get_sub_field('tab_name');?></a>
                           </li>
                     <?php  
                           endwhile; ?>
                        </ul>
                     <?php endif; ?>
                        
                           <?php
                           $b = 1;
                           if( have_rows('technologies_tabs') ):  ?>
                              <div class="tab-content" id="myTabContent3">
                           <?php while( have_rows('technologies_tabs') ) : the_row(); ?>
                                 
                                 <div class="tab-pane fade <?php echo $b == 1 ? ' active show' : '' ?>" id="tab<?php echo $b++;?>" role="tabpanel" aria-labelledby="tab1a">
                                      <div class="tab-data-cont">
                                          <div class="row justify-content-center">
                                             <?php
                                                if( have_rows('images_box') ):
                                                    while( have_rows('images_box') ) : the_row(); ?>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                   <div class="icon-with-title">
                                                      <a href="javascript:void(0)">
                                                         <div class="iwt-icon"> 
                                                            <img src="<?php echo get_sub_field('icons');?>" alt="">
                                                         </div>
                                                         <div class="iwt-content">
                                                            <p><?php echo get_sub_field('name');?></p>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                              <?php endwhile;
                                                endif; ?>
                                          </div>
                                      </div>
                                 </div>
                           <?php  
                                 endwhile; ?>
                              </div>
                           <?php endif; ?>
                            
                    </div>
                </div>
            </div>
         </div>
      </section>
    <!--end technologies-->
<?php endif ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'client_testi_counter' ) : ?>

    <!--start home review-->
   <section class="reebgd sec-pad">
      <div class="container">
        
         <?php while ( have_rows('client_section') ) : the_row();?>
         <?php if( get_row_layout() == 'clients' ) : ?>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="sec-heading text-center pera-block mb-5">
                    <?php if(!empty(get_sub_field('heading'))) : ?>
                    <h2><?php echo get_sub_field('heading');?></h2>
                    <?php endif ?>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-lg-12">
                 <div class="heading-review text-center">
                  <?php
                     if( have_rows('logos') ): ?>
                     <ul class="row justify-content-center text-center">
                        <?php while( have_rows('logos') ) : the_row(); ?>
                         <li class="col-lg-2 col-md-3 col-sm-4 col-4">
                           <div class="brand-logo">
                              <img src="<?php echo get_sub_field('logo');?>" alt="clients" class="img-fluid">
                           </div>
                         </li>
                     <?php endwhile; ?>
                     </ul>
                     <?php endif; ?>
                 </div>
             </div>
         </div>
         <?php endif ?>

         <?php if( get_row_layout() == 'testimonials' ) :
            $testimonial_id = get_sub_field('testimonial');
            ?>
         <div class="row mt100">
             <div class="col-lg-6 vcenter">
                 <div class="quote-text">
                     <h2><?php echo get_sub_field('heading');?></h2>
                 </div>
             </div>
             <div class="col-lg-6 vcenter">
               <?php 
                  $testi_args = array(
                      'post_type' => 'testimonial',
                      'order' => 'DESC',
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
                  <div class="ree-card dark-deep no-shadows mt30 trust-review owl-carousel">
                  <?php while ($tm_query->have_posts()) : $tm_query->the_post(); ?>
                     <div class="items">
                         <div class="review-text testimonal">
                            <div style="color: #fff;">
                                <?php echo get_the_content();?>
                            </div>
                         </div>
                         <div class="ree-row-set mt30">
                             <div class="media vcenter">
                                 <div class="ree-icon-set img-round80">
                                    <?php 
                                    if ( has_post_thumbnail() ) { ?>
                                       <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  alt="<?php echo get_the_title(); ?>" class="img-fluid" />
                                    <?php }
                                    else { ?>
                                       <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/avatar-1.png" alt="<?php echo get_the_title(); ?>" class="img-fluid" />
                                    <?php }
                                    ?>
                                 </div>
                                 <div class="ree-details-set user-info">
                                     <h5 style="color: #fff;"><?php echo the_title();?></h5>
                                     <p style="color: #fff;"><?php echo the_field('designation');?></p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>
             </div>
         </div>
         <?php endif ?>
         
         <?php if( get_row_layout() == 'counter_layout' ) : 
            $counter_1 = get_sub_field('counter_1');
            $counter_2 = get_sub_field('counter_2');
            $counter_3 = get_sub_field('counter_3');
            $counter_4 = get_sub_field('counter_4');
            ?>
         <div class="row mt100">
            <?php if($counter_1) : ?>
             <div class="col-lg-3 col-sm-6 col-6 mt30">
                 <div class="counter-c-a">
                     <h2><span class="counter"><?php echo $counter_1['number'];?></span>
                        <span><?php echo $counter_1['affix'];?></span>
                     </h2>
                     <p><?php echo $counter_1['title'];?></p>
                 </div>
             </div>
            <?php endif; ?>

            <?php if($counter_2) : ?>
             <div class="col-lg-3 col-sm-6 col-6 mt30">
                 <div class="counter-c-a">
                     <h2><span class="counter"><?php echo $counter_2['number'];?></span>
                        <span><?php echo $counter_2['affix'];?></span>
                     </h2>
                     <p><?php echo $counter_2['title'];?></p>
                 </div>
             </div>
            <?php endif; ?>

            <?php if($counter_3) : ?>
             <div class="col-lg-3 col-sm-6 col-6 mt30">
                 <div class="counter-c-a">
                     <h2><span class="counter"><?php echo $counter_3['number'];?></span>
                        <span><?php echo $counter_3['affix'];?></span>
                     </h2>
                     <p><?php echo $counter_3['title'];?></p>
                 </div>
             </div>
            <?php endif; ?>

            <?php if($counter_4) : ?>
             <div class="col-lg-3 col-sm-6 col-6 mt30">
                 <div class="counter-c-a">
                     <h2><span class="counter"><?php echo $counter_4['number'];?></span>
                        <span><?php echo $counter_4['affix'];?></span>
                     </h2>
                     <p><?php echo $counter_4['title'];?></p>
                 </div>
             </div>
            <?php endif; ?>
             
         </div>
         <?php endif ?>
         <?php endwhile; ?>
      </div>
   </section>
    <!--end home review -->
   <?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'blogs' ) : 
      $blog_tagline = get_sub_field('blog_tagline');
      $blog_heading = get_sub_field('blog_heading');
      $blog_description = get_sub_field('blog_description');
      $blog_id = get_sub_field('blog');
      ?>
<!--start blogs  -->
    <section class="half-bg-ree sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading text-center pera-block">
                        <?php if(!empty($blog_tagline)): ?>
                        <span class="sub-heading mb15" style="color: #fff;"><?php echo $blog_tagline;?></span>
                        <?php endif; ?>

                        <?php if(!empty($blog_heading)):?>
                        <h2 style="color: #fff;"><?php echo $blog_heading;?></h2>
                        <?php endif; ?>

                        <?php if(!empty($blog_description)):?>
                        <p style="color: #fff;"><?php echo $blog_description;?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php 
               $posts = get_posts(array(
                  'posts_per_page'    => 3,
                  'post_type'         => 'post',
                  'category__in'      => $blog_id
               ));
               if( $posts ):
                  $x = 1;
                  ?> 
            <div class="row mt30">
               <?php foreach( $posts as $post ):
                  setup_postdata( $post ); ?>
                <div class="col-lg-4 mt30" data-aos="fade-up" data-aos-delay="<?php echo $x == 1 ? '200' : '' ?><?php echo $x == 2 ? '500' : '' ?><?php echo $x == 3 ? '800' : '' ?>">
                    <div class="half-blog-card">
                        <div class="half-blog-img">
                           <a href="<?php the_permalink();?>">
                              <?php 
                              if ( has_post_thumbnail() ) { ?>
                                 <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  alt="<?php echo get_the_title(); ?>" class="img-fluid" />
                              <?php }
                              else { ?>
                                 <img src="<?=site_url();?>/wp-content/uploads/2022/03/Image_not_available.png" alt="<?php echo get_the_title(); ?>" class="img-fluid" />
                              <?php }
                              ?>
                           </a>
                        </div>
                        <div class="half-blog-content">
                           <div class="blog-quick-inf mb20">
                              <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date( ' d M, Y ', $post->ID ); ?> </span>
                              <span><i class="fas fa-clock"></i> <?php echo get_the_date( ' g:i A ', $post->ID ); ?></span>
                           </div>

                           <h4 class="mb15">
                              <a href="<?php the_permalink();?>"><?php the_title();?></a>
                           </h4>
                           <p>
                              <?php $content = get_the_content();
                              echo wp_trim_words($content, 15, '.');
                              ?>
                           </p>
                        </div>
                    </div>
                </div>
                 <?php $x++; endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
         <?php endif; ?>
        </div>
    </section>
    <!--end blogs-->
   <?php endif ?>
<?php endwhile; ?>





<?php

$request = wp_remote_get( 'https://ipapi.co/json/' );
// $request = wp_remote_get( 'https://api.hostip.info/get_html.php?ip=207.228.238.7' );
if( is_wp_error( $request ) ) {
    return false; // Bail early
}
$body = wp_remote_retrieve_body( $request );
$data = json_decode( $body );
?>
<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'contact_us' ) : 
      $contact_tagline = get_sub_field('tagline');
      $contact_heading = get_sub_field('contact_heading');
      $contact_details = get_sub_field('contact_details');
      $contact_form = get_sub_field('contact_form');
      ?>
<?php
$country = $data->country_name;
$india_contact = get_field('india_contact', 'option');
$usa_contact = get_field('usa_contact', 'option');
$uk_contact = get_field('uk_contact', 'option');
?>
   <!--start contact block-->
   <section class="home-contact pb100" data-background="<?php echo get_template_directory_uri(); ?>/images/office-1.jpg">
        <div class="container">
            <div class="row zup">
                <div class="col-right-a">
                    <div class="sec-heading fourc-up-a">
                        <?php if(!empty($contact_tagline)): ?>
                        <span class="sub-heading mb15"><?php echo $contact_tagline; ?></span>
                        <?php endif; ?>

                        <?php if(!empty($contact_heading)): ?>
                        <h2><?php echo $contact_heading; ?></h2>
                        <?php endif; ?>
                    </div>
                    <?php if($country == 'India'): ?>
                        <?php if($india_contact): ?>
                        <div class="home-contact-block">
                            <div class="contact-infos">
                               <?php if(!empty($india_contact['phone'])): ?>
                                <div class="c-infot">
                                  <span>Connect on Phone</span>
                                    <a href="tel:<?php echo $india_contact['phone'];?>"><i class="fas fa-phone-alt"></i> <?php echo $india_contact['phone'];?></a>
                                </div>
                                <?php endif; ?>

                                <?php if(!empty($india_contact['whatsapp'])): ?>
                                  <?php 
                                  $country_code = '91';
                                  $result = ltrim( preg_replace("/[^0-9]+/", "",$india_contact['whatsapp']) , $country_code);
                                  ?>
                                <div class="c-infot">
                                  <span>Connect on Whatsapp</span>
                                    <a href="https://wa.me/<?php echo $result;?>?text=hello%0A"><i class="fab fa-whatsapp"></i> <?php echo $india_contact['whatsapp'];?></a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="contact-infos mt35">
                               <?php if(!empty($india_contact['email'])): ?>
                               <div class="c-infot">
                                  <span>Connect on Email</span>
                                  <a href="mailto:<?php echo $india_contact['email'];?>">
                                     <i class="fas fa-envelope"></i>
                                     <?php echo $india_contact['email'];?>
                                  </a>
                               </div>
                               <?php endif; ?>
                               <?php $contact_skype = $india_contact['skype'];
                               if ($contact_skype): ?>
                               <div class="c-infot">
                                    <span>Connect on Skype</span>
                                    <a href="skype:<?php echo $contact_skype['url'];?>"><i class="fab fa-skype"></i> <?php echo $contact_skype['title'];?></a>
                               </div>
                               <?php endif; ?>
                            </div>
                            
                            <?php if(!empty($india_contact['map'])): ?>
                            <div class="our-map mt40">
                               <p class="mb5">Our Location</p>
                               <?php echo $india_contact['map'];?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    <?php elseif($country == 'US'): ?>
                        <?php if($usa_contact): ?>
                            <div class="home-contact-block">
                                <div class="contact-infos">
                                   <?php if(!empty($usa_contact['phone'])): ?>
                                    <div class="c-infot">
                                      <span>Connect on Phone</span>
                                        <a href="tel:<?php echo $usa_contact['phone'];?>"><i class="fas fa-phone-alt"></i> <?php echo $usa_contact['phone'];?></a>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(!empty($usa_contact['whatsapp'])): ?>
                                      <?php 
                                      $country_code = '91';
                                      $result = ltrim( preg_replace("/[^0-9]+/", "",$usa_contact['whatsapp']) , $country_code);
                                      ?>
                                    <div class="c-infot">
                                      <span>Connect on Whatsapp</span>
                                        <a href="https://wa.me/<?php echo $result;?>?text=hello%0A"><i class="fab fa-whatsapp"></i> <?php echo $usa_contact['whatsapp'];?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="contact-infos mt35">
                                   <?php if(!empty($usa_contact['email'])): ?>
                                   <div class="c-infot">
                                      <span>Connect on Email</span>
                                      <a href="mailto:<?php echo $usa_contact['email'];?>">
                                         <i class="fas fa-envelope"></i>
                                         <?php echo $usa_contact['email'];?>
                                      </a>
                                   </div>
                                   <?php endif; ?>
                                   <?php $contact_skype = $usa_contact['skype'];
                                   if ($contact_skype): ?>
                                   <div class="c-infot">
                                        <span>Connect on Skype</span>
                                        <a href="skype:<?php echo $contact_skype['url'];?>"><i class="fab fa-skype"></i> <?php echo $contact_skype['title'];?></a>
                                   </div>
                                   <?php endif; ?>
                                </div>
                                
                                <?php if(!empty($usa_contact['map'])): ?>
                                <div class="our-map mt40">
                                   <p class="mb5">Our Location</p>
                                   <?php echo $usa_contact['map'];?>
                                </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($uk_contact): ?>
                            <div class="home-contact-block">
                                <div class="contact-infos">
                                   <?php if(!empty($uk_contact['phone'])): ?>
                                    <div class="c-infot">
                                      <span>Connect on Phone</span>
                                        <a href="tel:<?php echo $uk_contact['phone'];?>"><i class="fas fa-phone-alt"></i> <?php echo $uk_contact['phone'];?></a>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(!empty($uk_contact['whatsapp'])): ?>
                                      <?php 
                                      $country_code = '91';
                                      $result = ltrim( preg_replace("/[^0-9]+/", "",$uk_contact['whatsapp']) , $country_code);
                                      ?>
                                    <div class="c-infot">
                                      <span>Connect on Whatsapp</span>
                                        <a href="https://wa.me/<?php echo $result;?>?text=hello%0A"><i class="fab fa-whatsapp"></i> <?php echo $uk_contact['whatsapp'];?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="contact-infos mt35">
                                   <?php if(!empty($uk_contact['email'])): ?>
                                   <div class="c-infot">
                                      <span>Connect on Email</span>
                                      <a href="mailto:<?php echo $uk_contact['email'];?>">
                                         <i class="fas fa-envelope"></i>
                                         <?php echo $uk_contact['email'];?>
                                      </a>
                                   </div>
                                   <?php endif; ?>
                                   <?php $contact_skype = $uk_contact['skype'];
                                   if ($contact_skype): ?>
                                   <div class="c-infot">
                                        <span>Connect on Skype</span>
                                        <a href="skype:<?php echo $contact_skype['url'];?>"><i class="fab fa-skype"></i> <?php echo $contact_skype['title'];?></a>
                                   </div>
                                   <?php endif; ?>
                                </div>
                                
                                <?php if(!empty($uk_contact['map'])): ?>
                                <div class="our-map mt40">
                                   <p class="mb5">Our Location</p>
                                   <?php echo $uk_contact['map'];?>
                                </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php if($contact_form): ?>
                <div class="col-right-b">
                    <div class="form-contact-hom fourc-up-b">
                        <div class="form-block">
                           <?php if(!empty($contact_form['form_heading'])): ?>
                            <div class="form-head">
                                <h3><?php echo $contact_form['form_heading'];?></h3>
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($contact_form['form'])): ?>
                            <div class="form-body">
                                <?php echo do_shortcode('[contact-form-7 id="'.$contact_form['form'].'"]');?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--end contact block-->
   <?php endif ?>
<?php endwhile; ?>



<?php 
$india_contact = get_field('india_contact', 'option');

$usa_contact = get_field('usa_contact', 'option');

$uk_contact = get_field('uk_contact', 'option');
?>
<!-- start locations -->
    <div class="location-home sec-pad">
        <div class="container">
            <div class="row justify-content-center">
               <?php if(!empty($india_contact['address'])): ?>
                <div class="col-lg-4">
                    <div class="location-block- mt60">
                        <div class="loc-icon-nam">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/new-delhi.svg" alt="new-delhi">
                            <p><span class="ree-text rt40">India</span></p>
                        </div>
                        <p class="pt20 pb20"><?php echo $india_contact['address'];?></p>
                        <!-- <div class="loc-contct">
                            <a href="javascript:void(0)" target="blank" class="rount-btn"
                                data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="rount-btn"
                                data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="rount-btn"
                                data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="rount-btn"
                                data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>
                        </div> -->
                    </div>
                </div>
               <?php endif; ?>

               <?php if(!empty($usa_contact['address'])): ?>
                <div class="col-lg-4">
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
                <div class="col-lg-4">
                    <div class="location-block- mt60">
                        <div class="loc-icon-nam">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/big-ben.svg" alt="big-ben">
                            <p><span class="ree-text rt40">UK</span></p>
                        </div>
                        <p class="pt20 pb20"><?php echo $uk_contact['address'];?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- end locations -->


<?php get_footer(); ?>