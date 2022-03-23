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
                    <?php $contact_info = get_field('contact_info', 'option'); ?>
                    <?php if($contact_info): ?>
                    <div class="col footer-head">
                        <h5><?php echo $contact_info['heading']; ?></h5>
                        <ul class="footer-links-list social-linkz">
                            <?php if( !empty( $contact_info['address'] ) ): ?>
                            <li>
                                <a href="<?php echo $contact_info['map_link'];?>" target="_blank"> 
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                   <?php echo $contact_info['address'];?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $contact_info['phone_number'] ) ): ?>
                            <li>
                                <a href="tel:<?php echo $contact_info['phone_number']; ?>">
                                    <span><i class="fas fa-phone-square-alt"></i></span>
                                   <?php echo $contact_info['phone_number']; ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $contact_info['mobile_number'] ) ): ?>
                            <li>
                                <a href="tel:<?php echo $contact_info['mobile_number']; ?>">
                                    <span><i class="fab fa-whatsapp-square"></i></span>
                                   <?php echo $contact_info['mobile_number']; ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $contact_info['email_1'] ) ): ?>
                            <li>
                                <a href="mailto:<?php echo $contact_info['email_1']; ?>">
                                    <span><i class="fas fa-envelope"></i></span>
                                   <?php echo $contact_info['email_1']; ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty( $contact_info['email_2'] ) ): ?>
                            <li>
                                <a href="mailto:<?php echo $contact_info['email_2']; ?>">
                                    <span><i class="fas fa-envelope"></i></span>
                                   <?php echo $contact_info['email_2']; ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php
                            $skype = $contact_info['skype'];
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

                    <?php $industries = get_field('industries', 'option'); ?>
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
                                <a href="<?php echo esc_url( $our_work_url ); ?>" class="ree-btn ree-btn-grdt1 mw-80 no-shadows" target="<?php echo esc_attr( $our_work_target ); ?>"> <?php echo esc_html( $our_work_title ); ?> <i class="fas fa-arrow-right fa-btn"></i></a>
                             </div>
                          <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="container ft-cpy">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ft-copyright">
                            <p>We are tracking any intention of piracy.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ft-copyright ft-r">
                            <p><?php echo get_field('copyright_text', 'option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

   
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
<?php wp_footer(); ?>

</body>
</html>


