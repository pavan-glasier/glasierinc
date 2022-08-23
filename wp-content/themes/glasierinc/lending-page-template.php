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
                    <?php echo do_shortcode('[contact-form-7 id="'.$form_column['form_select'].'" ]');?>
                  <?php endif;?>
               </section>
            </div>
         </div>
      </div>
   </section>
<?php endif ?>
<?php endwhile; ?>


   <section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2">
      <div class="container">
         <header class="main-heading row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
               <h2 class="heading text-uppercase"><span class="main-color">about</span> Glasier inc</h2>
               <span class="divider center"></span>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                  has been the industry's standard dummy text ever since the 1500s
               </p>
            </div>
         </header>
         <div class="row">
            <div class="col-md-6">
               <img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/about-us.png">
            </div>
            <div class="col-md-6 mt-3 about-text">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eaque fugit fugiat dolorum modi. Enim numquam maxime voluptatum dolor perspiciatis repellat quasi aut, velit nulla odio vel reiciendis ab ullam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, consequatur!  </p>
               <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eaque fugit fugiat dolorum modi. Enim numquam maxime voluptatum dolor perspiciatis repellat quasi aut, velit nulla odio vel reiciendis ab ullam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, consequatur!</p>
               <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eaque fugit fugiat dolorum modi. Enim numquam maxime voluptatum dolor perspiciatis repellat quasi aut, velit nulla odio vel reiciendis ab ullam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, consequatur!</p>
               <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eaque fugit fugiat dolorum modi. Enim numquam maxime voluptatum dolor perspiciatis repellat quasi aut, velit nulla odio vel reiciendis ab ullam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, consequatur!</p>
            </div>
         </div>
      </div>
   </section>
   <section class="people-say" data-scroll-index="3">
      <div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg"
         style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img04.jpg);" data-scroll-index="3">
         <div class="container pad-top-xs">
            <div id="testim" class="testim">
               <header class="main-heading row">
                  <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                     <h2 class="heading text-uppercase"><span class="main-color">What</span> people say</h2>
                     <span class="divider center"></span>
                  </div>
               </header>
               <div class="wrap">
                  <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                  <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                  <ul id="testim-dots" class="dots">
                     <li class="dot active"></li>
                     <li class="dot"></li>
                     <li class="dot"></li>
                     <li class="dot"></li>
                     <li class="dot"></li>
                  </ul>
                  <div id="testim-content" class="cont">
                     <div class="active">
                        <div class="img"><img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/man-1.svg" alt=""></div>
                        <h2>Lorem P. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                     </div>
                     <div>
                        <div class="img"><img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/man-2.svg" alt=""></div>
                        <h2>Mr. Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                     </div>
                     <div>
                        <div class="img"><img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/man-3.svg" alt=""></div>
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                     </div>
                     <div>
                        <div class="img"><img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/woman-1.svg" alt=""></div>
                        <h2>Lorem De Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                     </div>
                     <div>
                        <div class="img"><img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/woman-2.svg" alt=""></div>
                        <h2>Ms. Lorem R. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="services-section pad-top-lg pad-bottom-sm" data-scroll-index="4">
       <div class="container">
          <header class="main-heading row">
             <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                <h2 class="heading text-uppercase"><span class="main-color">our</span> Services</h2>
                <span class="divider center"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                   has been the industry's standard dummy text ever since the 1500s
                </p>
             </div>
          </header>
          <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="about-box">
                   <span class="num main-color">01.</span>
                   <span class="title text-uppercase">Web Development</span>
                   <span class="divider"></span>
                   <p>Allow your brand to communicate with your customers as you would Experience a new level of interactive, innovative and eye-catching websites with...</p>
                   <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="about-box">
                   <span class="num main-color">02.</span>
                   <span class="title text-uppercase">Mobile Applications</span>
                   <span class="divider"></span>
                   <p>Apps let you bring your business name to life. Our mobile application development services in India can help your business increase its...</p>
                   <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="about-box">
                   <span class="num main-color">03.</span>
                   <span class="title text-uppercase">Custom Software Development Company in India</span>
                   <span class="divider"></span>
                   <p>Today, custom digital experiences are key to building a better future for businesses. With our expertise in creating customized, high-performing, and top-rated...</p>
                   <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-4 mt-50">
                <div class="about-box">
                   <span class="num main-color">04.</span>
                   <span class="title text-uppercase">Dedicated Resource</span>
                   <span class="divider"></span>
                   <p>Don't let the recruitment process overwhelm you. Hire an experienced development team for your dream project. Hire a world-class dedicated development team...</p>
                   <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-4 mt-50">
                <div class="about-box">
                   <span class="num main-color">05.</span>
                   <span class="title text-uppercase">UI/UX Design Services</span>
                   <span class="divider"></span>
                   <p>Creating an engaging user interface to increase engagement and create a memorable digital experience. Glasier Inc features a team of skilled designers...</p>
                   <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-4 mt-50">
                <div class="about-box">
                   <span class="num main-color">06.</span>
                   <span class="title text-uppercase">SEO Company India</span>
                   <span class="divider"></span>
                   <p>For every business, whether it's a small business or a large corporation, Glasier Inc continues to be the best SEO Company in...</p>
                   <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                </div>
             </div>
          </div>
       </div>
    </section>
   <section class="bg-img-full price-section pad-top-lg pad-bottom-sm" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img02.jpg);" data-scroll-index="5">
      <div class="container">
         <header class="main-heading row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
               <h2 class="heading text-uppercase">
                  <span class="main-color">Our </span> Portfolio
               </h2>
               <span class="divider center"></span>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
         </header>
         <div class="row">
            <div class="col-md-6 p-0">
               <div class="portfolio-box  pad-bottom-sm">
                  <img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/port-folio-1.png">
               </div>
            </div>
            <div class="col-md-6 p-0">
               <div class="portfolio-box pad-bottom-sm">
                  <img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/port-folio-1.png">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-color: #032454;">
      <span class="overlay"></span>
      <div class="container">
         <div class="row">
            <div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-1 col-lg-push-2 text-center">
               <span class="subtitle">Creative Unbounce Landing Page</span>
               <h2 class="text-uppercase">get a free Quote today</h2>
               <span class="divider white center" style=""></span>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                  has been the industry's standard dummy text ever since the 1500s
               </p>
               <button class="btn btn-default main-bg-color text-uppercase smooth"
                  data-scroll-nav="1">Click here</button>
            </div>
         </div>
      </div>
   </section>
   <section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="6">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <img src="<?php echo esc_url( get_template_directory_uri() );?>/lending/images/contect.png">
            </div>
            <div class="col-md-6 mt-3 about-text contect-form">
               <section class="quote-form" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img02.jpg);">
                  <h2 class="form-heading text-center text-uppercase">register now</h2>
                  <!-- <span class="form-title text-center">Take your free trial</span> -->
                  <form id="contactForm" data-toggle="validator" novalidate="true">
                     <fieldset>
                        <div class="form-group">
                           <input type="text" id="name" placeholder="Your Name" class="form-control" required="" data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                           <input type="email" id="email" placeholder="Your Email" class="form-control" required="" data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                           <input type="tel" id="phone" placeholder="Phone Number" class="form-control" required="" data-error="NEW ERROR MESSAGE">
                        </div>
                        <div id="msgSubmit" class="form-message hidden"></div>
                        <span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will never share your personal info</span>
                        <button class="btn btn-default main-bg-color disabled" type="submit" id="form-submit" style="pointer-events: all; cursor: pointer;">Submit</button>
                     </fieldset>
                  </form>
               </section>
            </div>
         </div>
      </div>
   </section>
   <div class="location-home sec-pad">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-3">
               <div class="location-block- mt60">
                  <div class="loc-icon-nam">
                     <img src="https://www.glasierinc.com/wp-content/uploads/2022/04/statue-of-liberty-america-svgrepo-com.svg" alt="new-usa" class="lazyloaded" data-ll-status="loaded">
                     <noscript><img src="https://www.glasierinc.com/wp-content/uploads/2022/04/statue-of-liberty-america-svgrepo-com.svg" alt="new-usa"></noscript>
                     <p><span class="ree-text rt40">USA</span></p>
                  </div>
                  <p class="pt20 pb20">600 Parkview Drive, 204 Apt, <br>Santa Clara, California, <br>USA</p>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="location-block- mt60">
                  <div class="loc-icon-nam">
                     <img src="https://www.glasierinc.com/wp-content/themes/glasierinc/images/big-ben.svg" alt="big-ben" class="lazyloaded" data-ll-status="loaded">
                     <noscript><img src="https://www.glasierinc.com/wp-content/themes/glasierinc/images/big-ben.svg" alt="big-ben"></noscript>
                     <p><span class="ree-text rt40">UK</span></p>
                  </div>
                  <p class="pt20 pb20">85, Great Portland Street,<br> First Floor, London,<br> W1W 7LT</p>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="location-block- mt60">
                  <div class="loc-icon-nam">
                     <img src="https://www.glasierinc.com/wp-content/uploads/2022/04/canada.png" alt="canada" class="lazyloaded" data-ll-status="loaded">
                     <noscript><img src="https://www.glasierinc.com/wp-content/uploads/2022/04/canada.png" alt="canada"></noscript>
                     <p><span class="ree-text rt40">Canada</span></p>
                  </div>
                  <p class="pt20 pb20">40 vanier drive
                     Guelph, <br> N1G2X7
                     Ontario
                  </p>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="location-block- mt60">
                  <div class="loc-icon-nam">
                     <img src="https://www.glasierinc.com/wp-content/themes/glasierinc/images/new-delhi.svg" alt="new-delhi" class="lazyloaded" data-ll-status="loaded">
                     <noscript><img src="https://www.glasierinc.com/wp-content/themes/glasierinc/images/new-delhi.svg" alt="new-delhi"></noscript>
                     <p><span class="ree-text rt40">India</span></p>
                  </div>
                  <p class="pt20 pb20">A/6, First Floor, Safal Profitaire, <br> Corporate Rd, opp. Hotel Ramada, <br> Prahlad Nagar, Ahmedabad, <br>Gujarat, India 380015</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>


<?php get_footer('lending'); ?>