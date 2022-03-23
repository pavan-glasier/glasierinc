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
<section class="header-title head-opacity" data-background="<?php echo get_template_directory_uri(); ?>/images/office.jpg">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-7 text-center">
            <?php if(!empty($main_heading)): ?>
              <h1 class="mb15"><?php echo $main_heading;?></h1>
            <?php endif; ?>

            <?php if(!empty($description)): ?>
              <p class="h-light">
                <?php echo $description;?>
              </p>
              <?php endif; ?>
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
        <div class="row">
            <?php if (!empty($website_performance_image)): ?>
            <div class="col-lg-4">
                <div class="image-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <img src="<?php echo $website_performance_image;?>" alt="image" class="img-fluid no-shadow">
                </div>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($title_content_group)): ?>
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pl25">
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
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span style="color: #fff;">Service</span>
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


<!--start cta-->
<section class="r-bg-x sec-pad">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading">
                        <h2 class="mb15">Hire world-class <span class="ree-text rt40">developers</span> for your
                           <span class="ree-text rt40">project</span>
                        </h2>
                        <p>We have a dexterity team of designers & developers that works on clients projects
                           excellently and delivers the project on timeline.
                        </p>
                        <div class="mult-btns">
                           <a href="get-quote.html" class="ree-btn  ree-btn-grdt1 mt40">Talk to our experts <i
                              class="fas fa-arrow-right fa-btn"></i></a>
                           <span class="or">or</span>
                           <a href="tel:1234567890" class="mt40 call-us">Call Us +91 1234 567 890</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 vcenter text-center">
                    <div class="sol-img-png">
                        <img src="https://glasier.in/Glasier_website/images/developers.svg" alt="app" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--start cta-->


<!--Start App Development Process-->
<section class="service-block pad-tb1 light-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Process</span>
                    <h2>Our App Development Process</h2>
                    <p>Our design process follows a proven approach. We begin with a deep understanding of your
                    needs and create a planning template.
                    </p>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 30px;"></div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="common-heading ptag">
                    <img src="https://glasier.in/Glasier_website/images/app-devlopment-flow.png" alt="app" class="img-fluid">
               </div>
            </div>
        </div>
    </div>
</section>
<!--End App Development Process-->


<!--Industries-->
<section class="featured-project  sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15">Industries We Serve</h2>
                    <p>Our design process follows a proven approach. We begin with a deep understanding of your
                    needs and create a planning template. 
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt30">
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/house.svg" alt="img">
                    <h6>Real estate</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/travel-case.svg" alt="img">
                    <h6>Tour &amp; Travels</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/video-tutorials.svg" alt="img">
                    <h6>Education</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/taxi.svg" alt="img">
                    <h6>Transport</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/event.svg" alt="img">
                    <h6>Event</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/smartphone.svg" alt="img">
                    <h6>eCommerce</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/joystick.svg" alt="img">
                    <h6>Game</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/healthcare.svg" alt="img">
                    <h6>Healthcare</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/money-growth.svg" alt="img">
                    <h6>Finance</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/baker.svg" alt="img">
                    <h6>Restaurant</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/mobile-app.svg" alt="img">
                    <h6>On-Demand</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor">
                    <img src="https://glasier.in/Glasier_website/images/groceries.svg" alt="img">
                    <h6>Grocery</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Industries end-->


<!-- Start Some of Our Works-->
<section class="r-bg-x pad-tb1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span>Our Projects</span>
                    <h2>Some of Our Works</h2>
                    <p class="mb0">We think big and have hands in all leading technology platforms to provide you
                    wide array of services.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="https://glasier.in/Glasier_website/images/image-1.jpg" alt="portfolio" class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Creative </a></h4>
                        <p>ios, design</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="https://glasier.in/Glasier_website/images/image-2.jpg" alt="portfolio" class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Brochure Design</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="https://glasier.in/Glasier_website/images/image-3.jpg" alt="portfolio" class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Ecommerce Development</a></h4>
                        <p>Web application</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="https://glasier.in/Glasier_website/images/image-4.jpg" alt="portfolio" class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Icon Pack</a></h4>
                        <p>Android &amp; iOs, Design</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="https://glasier.in/Glasier_website/images/image-5.jpg" alt="portfolio" class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Smart Watch</a></h4>
                        <p>UI/UX Design</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="https://glasier.in/Glasier_website/images/image-6.jpg" alt="portfolio" class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Brochure Design</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 maga-btn mt60">
                <a href="javascript:void(0)" class="btn-outline">View More Projects <i
                 class="fas fa-chevron-right fa-icon"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End Some of Our Works-->


<!--Start reveiws-->
<section class="reviews-block bg-gradient6 pad-tb1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span style="color: #fff;">Service Testimonials</span>
                    <h2 style="color: #fff;">Client Speaks</h2>
                    <p class="mb30" style="color: #fff;">Check our customers success stories.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="https://glasier.in/Glasier_website/images/envato.png" alt="review service logo"></span></div>
                    </div>
                    <div class="review-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                           has been the industry's standard dummy text ever since the 1500s, when an unknown
                           printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Sue Vaneer</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
                            <div class="star-rate">
                                <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="https://glasier.in/Glasier_website/images/envato.png" alt="review service logo"></span> </div>
                    </div>
                    <div class="review-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                           has been the industry's standard dummy text ever since the 1500s, when an unknown
                           printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Don Stairs</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
                            <div class="star-rate">
                                <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="https://glasier.in/Glasier_website/images/envato.png" alt="review service logo"></span> </div>
                    </div>
                    <div class="review-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                           has been the industry's standard dummy text ever since the 1500s, when an unknown
                           printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Russ L. Rogers</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
                            <div class="star-rate">
                                <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                    aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End reveiws-->

<!--Start CTA-->
<section class="cta-area pad-tb1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Let's work together</span>
                    <h2>We Love to Listen to Your Requirements</h2>
                    <a href="javascript:void(0)" class="btn-outline">Estimate Project <i
                    class="fas fa-chevron-right fa-icon"></i></a>
                    <p class="cta-call">Or call us now <a href="tel:+1234567890"><i class="fas fa-phone-alt"></i>
                    (123) 456 7890</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-a1"><img src="https://glasier.in/Glasier_website/images/shape-3.svg" alt="shape"></div>
    <div class="shape shape-a2"><img src="https://glasier.in/Glasier_website/images/shape-4.svg" alt="shape"></div>
    <div class="shape shape-a3"><img src="https://glasier.in/Glasier_website/images/shape-13.svg" alt="shape"></div>
    <div class="shape shape-a4"><img src="https://glasier.in/Glasier_website/images/shape-11.svg" alt="shape"></div>
</section>
<!--End CAT-->
<?php get_footer(); ?>
