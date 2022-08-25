<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

?>
   <!--start footer -->
    <footer class="footer-a">
        <div class="footer-fist-row pt40">
            <div class="container">
                <div class="footer-rowset">
                        <?php
                        $country = getCountry();
                        $india_contact = get_field('india_contact', 'option');
                        $usa_contact = get_field('usa_contact', 'option');
                        $uk_contact = get_field('uk_contact', 'option');
                        $canada = get_field('canada', 'option');
                        
                     ?>
						<?php $contact_info = get_field('contact_info', 'option'); ?>
                        <?php if($india_contact): ?>
                        <div class="col footer-head">
                            <h5><?php echo $contact_info['heading']; ?></h5>
                            <ul class="footer-links-list social-linkz">
								
								<?php if( !empty( $usa_contact['phone'] ) ): ?>
								<li>
									<a href="tel:<?php echo str_replace(' ','',$usa_contact['phone']); ?>">
										<span><img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-united-states-48.png" /></span>
										<?php echo trim($usa_contact['phone']); ?>
									</a>
								</li>
								<?php endif; ?>
								
								<?php if( !empty( $uk_contact['phone'] ) ): ?>
								<li>
									<a href="tel:<?php echo str_replace(' ','',$uk_contact['phone']); ?>">
										<span><img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-great-britain-48.png" /></span>
										<?php echo $uk_contact['phone']; ?>
									</a>
								</li>
								<?php endif; ?>
								
								<?php if( !empty( $canada['phone'] ) ): ?>
                                <li>
                                    <a href="tel:<?php echo str_replace(' ','',$canada['phone']); ?>">
                                        <span><img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-canada-48.png" /></span>
                                       <?php echo $canada['phone']; ?>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if( !empty( $india_contact['phone'] ) ): ?>
                                <li>
                                    <a href="tel:<?php echo str_replace(' ','',$india_contact['phone']); ?>">
                                        <span><img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-india-48.png" /></span>
                                       <?php echo $india_contact['phone']; ?>
                                    </a>
                                </li>
                                <?php endif; ?>
								
								


                                <?php if( !empty( $india_contact['email'] ) ): ?>
                                <li>
                                    <a href="mailto:<?php echo $india_contact['email']; ?>">
                                        <span><i class="fas fa-envelope"></i></span>
                                       <?php echo $india_contact['email']; ?>
                                    </a>
                                </li>
                                <?php endif; ?>


                                <?php
                                $skype = $india_contact['skype'];
                                 if( $skype ): 
                                  $skype_url = $skype['url'];
                                  $skype_title = $skype['title'];
                                  $skype_target = $skype['target'] ? $skype['target'] : '_self';
                                ?>
                                <li>
                                    <a href="skype:<?php echo $skype_url; ?>" target="<?php echo esc_attr( $skype_target ); ?>">
                                        <span><i class="fab fa-skype"></i></span>
                                        <?php echo esc_html( $skype_title ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                       


                    <?php $follow_us = get_field('follow_us', 'option'); ?>
                    <?php if($follow_us): ?>
                    <div class="col footer-head">
                        <h5><?php echo $follow_us['heading'];?></h5>
                        <ul class="footer-links-list social-linkz">
                            <?php if( !empty( $follow_us['facebook'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['facebook'];?>">
                                    <span><i class="fab fa-facebook-f"></i></span> Facebook
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $follow_us['twitter'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['twitter'];?>">
                                    <span><i class="fab fa-twitter"></i></span> Twitter
                                </a>
                            </li>
                            <?php endif; ?>


                            <?php if( !empty( $follow_us['linkedin'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['linkedin'];?>">
                                    <span><i class="fab fa-linkedin-in"></i></span> Linkedin
                                </a>
                            </li>
                            <?php endif; ?>
                            
                            <?php if( !empty( $follow_us['instagram'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['instagram'];?>">
                                    <span><i class="fab fa-instagram"></i></span> Instagram
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $follow_us['medium'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['medium'];?>">
                                    <span><i class="fab fa-medium"></i></span> Medium
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $follow_us['dribbble'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['dribbble'];?>">
                                    <span><i class="fab fa-dribbble"></i></span> Dribbble
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $follow_us['behance'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['behance'];?>">
                                    <span><i class="fab fa-behance"></i></span> Behance
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $follow_us['pinterest'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['pinterest'];?>">
                                    <span><i class="fab fa-pinterest-p"></i></span> Pinterest
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $follow_us['youtube'] ) ): ?>
                            <li>
                                <a href="<?php echo $follow_us['youtube'];?>">
                                    <span><i class="fab fa-youtube"></i></span> Youtube
                                </a>
                            </li>
                            <?php endif; ?>

                            

                            
                        </ul>
                    </div>
                    <?php endif; ?>

                    <?php $services = get_field('services', 'option'); ?>
                    <?php if($services): ?>
                    <div class="col footer-head">
                        <h5><?php echo $services['heading'];?></h5>
                        <?php $services_menu = $services['services_menu']; ?>
                        <?php wp_nav_menu( array(
                               'theme_location'    => $services_menu['value'],
                               'container'         => 'ul',
                               'menu_class'        => 'footer-links-list' 
                            ) );
                        ?>
                    </div>
                    <?php endif; ?>

                    <?php $industries = get_field('industriess', 'option'); ?>
                    <?php if($industries): ?>
                    <div class="col footer-head">
                        <h5><?php echo $industries['heading'];?></h5>
                        <?php $industry = $industries['industry']; ?>
                        <?php wp_nav_menu( array(
                               'theme_location'    => $industry['value'],
                               'container'         => 'ul',
                               'menu_class'        => 'footer-links-list' 
                            ) );
                        ?>
                    </div>
                    <?php endif; ?>

                    <?php $portfolios = get_field('portfolios', 'option'); ?>
                    <?php if($portfolios): ?>
                    <div class="col footer-head">
                        <h5><?php echo $portfolios['heading'];?></h5>
                        <?php $portfolio = $portfolios['portfolio']; ?>
                        <?php wp_nav_menu( array(
                               'theme_location'    => $portfolio['value'],
                               'container'         => 'ul',
                               'menu_class'        => 'footer-links-list' 
                            ) );
                        ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="footer-abt mt70 pt40 pb40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 vcenter">
                            <div class="footer-ree-lg">
                                <div class="footer-logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                       <?php
                                        $footer_logo = get_field('footer_logo', 'option'); 
                                        if ( !empty( $footer_logo ) ) :
                                          ?>
                                       <img src="<?php echo esc_url( $footer_logo ); ?>" class="img" alt="glasierinc" />
                                       <?php endif; ?>
                                       
                                    </a>
                                </div>
                                <!-- <div class="star-rating-review mt30">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h6 class="mt10">Overall client rating is 4.9 out of 8,500 Clients for Reevan</h6> -->
                            </div>
                        </div>
                        <div class="col-lg-6 vcenter">
                            <div class="ref-logo">
                                
                            
                                <?php
                                if( have_rows('client_reviews', 'option') ):
                                    while( have_rows('client_reviews', 'option') ) : the_row(); ?>
                                        <a href="<?php echo get_sub_field('link');?>"> 
                                            <img src="<?php echo get_sub_field('image');?>" alt="Logo"> 
                                        </a>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <?php 
                          $our_work = get_field('our_work', 'option');
                          if( $our_work ): 
                              $our_work_url = $our_work['url'];
                              $our_work_title = $our_work['title'];
                              $our_work_target = $our_work['target'] ? $our_work['target'] : '_self';
                              ?>
                             <div class="col-lg-3 vcenter ft-btn">
                                <a href="<?php echo esc_url( $our_work_url ); ?>" class="ree-btn ree-btn-grdt1 mw-80 no-shadows" target="<?php echo esc_attr( $our_work_target ); ?>" data-toggle="modal" data-target="<?php echo esc_url( $our_work_url ); ?>"> <?php echo esc_html( $our_work_title ); ?> <i class="fas fa-arrow-right fa-btn"></i></a>
                             </div>
                          <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="container ft-cpy">
                <div class="row">
                    <!-- <div class="col-lg-5">
                        <div class="ft-copyright">
                            <p>We are tracking any intention of piracy.</p>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="ft-copyright text-center">
                            <p><?php echo get_field('copyright_text', 'option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


<?php 
$popup_args = array(
	'post_type' => 'popups',
); ?>

<?php $popup_query = new WP_Query($popup_args);
if ($popup_query->have_posts()) : ?>

<?php while ($popup_query->have_posts()) : $popup_query->the_post(); ?>
<?php
 $popup_form = get_field('popup_form');
 $popup_contents = get_field('contents');
if( $popup_form ): ?>
<!-- Modal Popup -->
<div id="popup-<?php echo $popup_form['form'];?>" class="modal fade bd-example-modal-md contact-popup " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
       <section>
          <div class="container">
			  <?php if( $popup_contents ): ?>
             <div class="contactInfo">
                <div class="box">
                   <div class="content-box">
					   <?php if(!empty($popup_contents['content'])) : ?>
						<h2><?php echo $popup_contents['content'];?></h2>
						<?php endif;?>
                     <?php if($popup_contents['link']) : 
					   $linkBtn = $popup_contents['link'];
					   ?>
                      <div class="text-center">
                         <a class="btn btn-theme border btn-md sucess-buton" href="<?php echo $linkBtn['url'];?>"><span><?php echo $linkBtn['title'];?></span></a>
                      </div>
					   <?php endif;?>
                   </div>
                </div>
             </div>
			  <?php endif;?>
             <div class="contactForm">
                <div class="form">
					<?php if(!empty($popup_form['popup_heading'])) : ?>
                   	<h2><?php echo $popup_form['popup_heading'];?></h2>
					<?php endif;?>
					
					<?php if(!empty($popup_form['popup_description'])) : ?>
                   	<p><?php echo $popup_form['popup_description'];?></p>
					<?php endif;?>
					
					<?php if(!empty($popup_form['form'])) : ?>
                   <?php echo do_shortcode('[contact-form-7 id="'.$popup_form['form'].'"]');?>
					<?php endif;?>

                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                   </button>
                </div>
             </div>
          </div>
       </section>
    </div>
 </div>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>



   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#acceptence").click(function() {
        if ($('#customCheck').prop('checked')) {
          $("#acceptence").removeClass('show');
        } else {
          $("#acceptence").addClass('show');
        }
    });
});


</script>

<script>

(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
    </script>
<?php wp_footer(); ?>

</body>
</html>


