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

<?php  $footer = new WP_Query( array( 'post_type' => 'footer' , 'order' => 'DESC', 'posts_per_page' => 1 ) );
while($footer->have_posts()) : $footer->the_post();?>
<!-- END -->


<!-- Start Footer 
         ============================================= -->
   <footer class="default-padding bg-gray">
      <div class="container">
         <div class="row">
            <div class="f-items">
               <div class="col-md-4 col-sm-6 equal-height item">
                  <div class="f-item">
                     <?php 
                        $columns = get_field('columns');
                        $column_1 = $columns['column_1'];
                        $logo = $column_1['logo'];

                     if( $logo ):
                        ?>
                         <img src="<?php echo $logo; ?>" alt="Logo" style="width: 250px;" />
                     <?php endif; ?>
                     <!-- <img src="<?php //echo get_template_directory_uri();?>/img/fhlogo.png" alt="Logo" style="width: 250px;"> -->
                     <p>
                        <!-- Our research and development wing keeps a close watch on new tech stacks, trends etc that are
                        changing the fintech landscape worldwide. -->
                        
                        <?php 
                        $about_us = $column_1['about_us'];
                           echo $about_us;
                        ?>
                     </p>
                     <div class="newsletter">
                        <h6>Newsletter</h6>
                        <?php 
                        $newsletter = $column_1['newsletter']; ?>
                        <?php echo do_shortcode( ' '. $newsletter .' ' ); ?>

                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 equal-height item">
                  <div class="f-item link">
                     <h4>Solutions</h4>


                           <?php 
                           $columns = get_field('columns');
                           $column_2 = $columns['column_2'];
                           $menu = $column_2['menu'];


                           //$menu = get_field( 'menu' );

                           function side_menu_fun($menu){
                              return wp_nav_menu( array(
                                      'theme_location'    => $menu,
                                      'depth'             => 2,
                                      'container'         => 'ul',
                                      'menu_class'        => 'link' 
                                   ) );
                           }
                           side_menu_fun($menu);
                           ?>

                  </div>
               </div>
               <div class="col-md-4 col-sm-6 equal-height item">
                  <div class="f-item twitter-widget">
                     


                     <?php 

                     $columns = get_field('columns');
                     $column_3 = $columns['column_3'];
                     $rows = $column_3['addresses'];

                     if( $rows ) {
                         foreach( $rows as $row ) {
                             echo '<h5 class="title12">';
                              echo $row['name'];
                             echo '</h5>';
                             echo '<p>';
                              echo $row['address'];
                             echo '</p>';
                         }
                     } ?>
                     <div class="address">
                        <ul>
                           <?php 
                           $columns = get_field('columns');
                           $column_3 = $columns['column_3'];
                           $email = $column_3['email'];
                           $phone = $column_3['phone'];
                           $website = $column_3['website'];
                           

                           if( $email ):
                           ?>
                           <li>
                              <div class="icon">
                                 <i class="fas fa-envelope"></i>
                              </div>
                              <div class="info">
                                 <h5>Email:</h5>
                                 <span><?php echo $email;?></span>
                              </div>
                           </li>
                           <?php endif; ?>
                           
                           <?php
                           if( $phone ):
                           ?>
                           <li>
                              <div class="icon">
                                 <i class="fas fa-phone"></i>
                              </div>
                              <div class="info">
                                 <h5>Phone:</h5>
                                 <span><?php echo $phone;?></span>
                              </div>
                           </li>
                           <?php endif; ?>

                           <?php
                           if( $website ):
                           ?>
                           <li>
                              <div class="icon">
                                 <i class="fas fa-desktop"></i>
                              </div>
                              <div class="info">
                                 <h5>Website:</h5>
                                 <span><?php echo $website;?></span>
                              </div>
                           </li>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Start Footer Bottom -->
         <div class="footer-bottom">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                                    

                  <?php 
                  $footer_bottom = get_field('footer_bottom');
                  $copy_right = $footer_bottom['copy_right'];

                  $social_icons = $footer_bottom['social_icons'];
                  $s_name = $social_icons['name'];
                  $s_link = $social_icons['link'];

                  if( $copy_right ):
                  ?>
                  <div class="col-lg-6 col-md-6 col-sm-7">
                     <p> <?php echo $copy_right; ?></p>
                  </div>
                  <?php endif; ?>
                  
                  <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                     <ul>

                     <?php 
                       if( have_rows('footer_bottom') ): 
                        while( have_rows('footer_bottom') ): the_row(); 
                        if( have_rows('social_icons') ):

                         // Loop through rows.
                         while( have_rows('social_icons') ) : the_row();

                           $name = get_sub_field('name');
                           $icon = get_sub_field('link');
                           $link_target = $icon['target'] ? $icon['target'] : '_self';
                           echo '<li> <a href="'.$icon['url'].'" target="'.$link_target.'"><i class="fa fa-'.strtolower($name).'"></i></a></li>';
                               
                         endwhile;
                        else :

                        endif;
                        endwhile;
                     endif;

                        ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Footer Bottom -->
      </div>
   </footer>
<?php endwhile; ?>


   <!--start footer -->
    <footer class="footer-a">
        <div class="footer-fist-row pt40">
            <div class="container">
                <div class="footer-rowset">
                    <div class="col footer-head">
                        <h5>Contact info</h5>
                        <ul class="footer-links-list social-linkz">
                            <li><a href="tel:+911234567890"><span><i class="fas fa-phone-square-alt"></i></span> +91 123
                                    4567 890 </a></li>
                            <li><a href="tel:+911234567890"><span><i class="fab fa-whatsapp-square"></i></span> +91 123
                                    4567 890</a></li>
                            <li><a href="/cdn-cgi/l/email-protection#214240534444536153444457404f0f424e4c"><span><i
                                            class="fas fa-envelope"></i></span> <span class="__cf_email__"
                                        data-cfemail="4a292b382f2f380a382f2f3c2b2464292527">[email&#160;protected]</span></a>
                            </li>
                            <li><a href="/cdn-cgi/l/email-protection#56353724333324162433332037387835393b"><span><i
                                            class="fas fa-envelope"></i></span> <span class="__cf_email__"
                                        data-cfemail="70191e161f3002151506111e5e131f1d">[email&#160;protected]</span></a>
                            </li>
                            <li><a href="skype:reevan.company"><span><i class="fab fa-skype"></i></span>
                                    reevan-skype</a></li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Follow Us</h5>
                        <ul class="footer-links-list social-linkz">
                            <li><a href="javascript:void(0)"><span><i class="fab fa-facebook-f"></i></span> Facebook</a>
                            </li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-twitter"></i></span> Twitter </a>
                            </li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-instagram"></i></span> Instagram</a>
                            </li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-pinterest-p"></i></span>
                                    Pinterest</a></li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-linkedin-in"></i></span>
                                    linkedin</a></li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-youtube"></i></span> Youtube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Services</h5>
                        <ul class="footer-links-list">
                            <li><a href="javascript:void(0)">Hire Dedicated Developers</a></li>
                            <li><a href="javascript:void(0)">Web App Development</a></li>
                            <li><a href="javascript:void(0)">Mobile App Development</a></li>
                            <li><a href="javascript:void(0)">Search Engine Optimization</a></li>
                            <li><a href="javascript:void(0)">Pay-Per-Click</a></li>
                            <li><a href="javascript:void(0)">Social Media Marketing</a></li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Industries</h5>
                        <ul class="footer-links-list">
                            <li><a href="javascript:void(0)">Healthcare</a></li>
                            <li><a href="javascript:void(0)">Education</a></li>
                            <li><a href="javascript:void(0)">Retail</a></li>
                            <li><a href="javascript:void(0)">Logistics</a></li>
                            <li><a href="javascript:void(0)">Oil & Gas</a></li>
                            <li><a href="javascript:void(0)">Music & Video</a></li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Portfolio</h5>
                        <ul class="footer-links-list">
                            <li><a href="javascript:void(0)">StockNow - Investment App</a></li>
                            <li><a href="javascript:void(0)">Dochelp - Patient Monitoring</a></li>
                            <li><a href="javascript:void(0)">Roster - Pizza Delivery</a></li>
                            <li><a href="javascript:void(0)">Nikea - Logo Design</a></li>
                            <li><a href="javascript:void(0)">Eptire - Blockchain Solution</a></li>
                            <li><a href="javascript:void(0)">ShopTop - Grocery App</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-abt mt70 pt40 pb40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 vcenter">
                            <div class="footer-ree-lg">
                                <div class="footer-logo">
                                    <a href="#"> <img src="images/footer-logo.png" alt="reeven" class="img"> </a>
                                </div>
                                <div class="star-rating-review mt30">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h6 class="mt10">Overall client rating is 4.9 out of 8,500 Clients for Reevan</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 vcenter">
                            <div class="ref-logo">
                                <a href="#"> <img src="images/app-futura.png" alt="Logo"> </a>
                                <a href="#"> <img src="images/clutch.png" alt="Logo"> </a>
                                <a href="#"> <img src="images/goodfirm.png" alt="Logo"> </a>
                                <a href="#"> <img src="images/itfirm.png" alt="Logo"> </a>
                            </div>
                        </div>
                        <div class="col-lg-3 vcenter ft-btn">
                            <a href="#" class="ree-btn  ree-btn-grdt1 mw-80 no-shadows">Our Brochure <i
                                    class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
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
                            <p>© Copyright 2022. All Rights Reserved.</p>
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

<?php wp_footer(); ?>

</body>
</html>


