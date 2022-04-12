<?php 

/**
* Template Name: Contact Us
*
*/

get_header(); ?>


<?php

$request = wp_remote_get( 'https://ipapi.co/json/' );
if( is_wp_error( $request ) ) {
    return false; // Bail early
}
$body = wp_remote_retrieve_body( $request );
$data = json_decode( $body );
?>

<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'title_section' ) :
  $tagline = get_sub_field('tagline');
  $heading = get_sub_field('heading');
  $description = get_sub_field('description');
  $image = get_sub_field('image');
?>
<?php
$country = $data->country_name;
$india_contact = get_field('india_contact', 'option');
$usa_contact = get_field('usa_contact', 'option');
$uk_contact = get_field('uk_contact', 'option');
?>
<!--contact info-->
      <div class="contact-head-sec r-bg-a pt85 pb120">
         <div class="container">
            <div class="row pt80">
               <div class="col-lg-5 vcenter">
                  <div class="page-headings">
                     <?php if(!empty($tagline)): ?>
                     <span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> <?php echo $tagline;?></span>
                     <?php endif; ?>

                     <?php if(!empty($heading)): ?>
                     <h1 class="mb15"><?php echo $heading;?></h1>
                     <?php endif; ?>
                     
                     <?php if(!empty($description)): ?>
                     <p><?php echo $description;?></p>
                     <?php endif; ?>
                     
                  </div>
               </div>
               <?php if($country == 'India'): ?>
                  <?php if($india_contact): ?>
                     <div class="col-lg-7 vcenter">
                        <div class="row">
                           <?php if(!empty($india_contact['phone'])): ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon">
                                       <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Phone</span>
                                       <a href="tel:<?php echo $india_contact['phone'];?>"> <?php echo $india_contact['phone'];?> </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                           <?php if(!empty($india_contact['whatsapp'])): ?>
                              <?php 
                                  $country_code = '91';
                                  $result = ltrim( preg_replace("/[^0-9]+/", "",$india_contact['whatsapp']) , $country_code);
                               ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fab fa-whatsapp"></i> </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Whatsapp</span>
                                       <a href="https://wa.me/<?php echo $result;?>?text=hello%0A"><?php echo $india_contact['whatsapp'];?></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>
                        </div>
                        <div class="row mt30">

                           <?php if(!empty($india_contact['email'])): ?>
                           <div class="col-lg-6">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i></div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Email</span>
                                       <a href="mailto:<?php echo $india_contact['email'];?>"> 
                                          <?php echo $india_contact['email'];?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                           <?php $contact_skype = $india_contact['skype'];
                               if ($contact_skype): ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fab fa-skype"></i> </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Skype</span>
                                       <a href="skype:<?php echo $contact_skype['url'];?>"> 
                                          <?php echo $contact_skype['title'];?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                        </div>
                     </div>
                  <?php endif; ?>

               <?php elseif($country == 'US'): ?>
                  <?php if($usa_contact): ?>
                     <div class="col-lg-7 vcenter">
                        <div class="row">
                           <?php if(!empty($usa_contact['phone'])): ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon">
                                       <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Phone</span>
                                       <a href="tel:<?php echo $usa_contact['phone'];?>"> <?php echo $usa_contact['phone'];?> </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                           <?php if(!empty($usa_contact['whatsapp'])): ?>
                              <?php 
                                  $country_code = '91';
                                  $result = ltrim( preg_replace("/[^0-9]+/", "",$usa_contact['whatsapp']) , $country_code);
                               ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fab fa-whatsapp"></i> </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Whatsapp</span>
                                       <a href="https://wa.me/<?php echo $result;?>?text=hello%0A"><?php echo $usa_contact['whatsapp'];?></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>
                        </div>
                        <div class="row mt30">

                           <?php if(!empty($usa_contact['email'])): ?>
                           <div class="col-lg-6">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i></div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Email</span>
                                       <a href="mailto:<?php echo $usa_contact['email'];?>"> 
                                          <?php echo $usa_contact['email'];?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                           <?php $contact_skype = $usa_contact['skype'];
                               if ($contact_skype): ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fab fa-skype"></i> </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Skype</span>
                                       <a href="skype:<?php echo $contact_skype['url'];?>"> 
                                          <?php echo $contact_skype['title'];?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                        </div>
                     </div>
                  <?php endif; ?>

               <?php else: ?>
                  <?php if($uk_contact): ?>
                     <div class="col-lg-7 vcenter">
                        <div class="row">
                           <?php if(!empty($uk_contact['phone'])): ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon">
                                       <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Phone</span>
                                       <a href="tel:<?php echo $uk_contact['phone'];?>"> <?php echo $uk_contact['phone'];?> </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                           <?php if(!empty($uk_contact['whatsapp'])): ?>
                              <?php 
                                  $country_code = '91';
                                  $result = ltrim( preg_replace("/[^0-9]+/", "",$uk_contact['whatsapp']) , $country_code);
                               ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fab fa-whatsapp"></i> </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Whatsapp</span>
                                       <a href="https://wa.me/<?php echo $result;?>?text=hello%0A"><?php echo $uk_contact['whatsapp'];?></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>
                        </div>
                        <div class="row mt30">

                           <?php if(!empty($uk_contact['email'])): ?>
                           <div class="col-lg-6">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i></div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Email</span>
                                       <a href="mailto:<?php echo $uk_contact['email'];?>"> 
                                          <?php echo $uk_contact['email'];?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                           <?php $contact_skype = $uk_contact['skype'];
                               if ($contact_skype): ?>
                           <div class="col-lg-6 m-mt30">
                              <div class="contact-details-block">
                                 <div class="ree-row-set">
                                    <div class="ree-icon-set dtb-icon"> <i class="fab fa-skype"></i> </div>
                                    <div class="ree-details-set dtb-details">
                                       <span>Connect on Skype</span>
                                       <a href="skype:<?php echo $contact_skype['url'];?>"> 
                                          <?php echo $contact_skype['title'];?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>

                        </div>
                     </div>
                  <?php endif; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
<?php endif; ?>
<?php endwhile; ?>




<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'contact_info' ) :
  $c_info_tagline = get_sub_field('tagline');
  $c_info_heading = get_sub_field('heading');
  $c_info_description = get_sub_field('description');
  $form_group = get_sub_field('form_group');
  $testimonial_id = $form_group['testimonial'];
  $trusted = get_sub_field('trusted');
  $logos = $trusted['logos'];
?>
<!--contact info-->
<div class="contact-form-sec sec-pad r-bg-d">
   <div class="container">
         <div class="row">           
            <div class="col-lg-6">
               <div class="sec-heading m-center">
                  <span class="sub-heading mb15"><?php echo $c_info_tagline;?></span>
                  <h2 class="mb15"><?php echo $c_info_heading;?></h2>
                  <p><?php echo $c_info_description;?></p>
               </div>
               <div class="trust-logo-block mt60">
               <?php 
               if( $logos) { 
                   echo '<ul class="ree-card">';
                   foreach( $logos as $logo ) { ?>
                       
                     <li><img src="<?php echo $logo['logo'];?>" alt="logo"></li>
                  <?php }
                   echo '</ul>';
               } ?>                                       
                  </ul>
               </div>

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
               <div class="ree-card mt30 trust-review owl-carousel">
                  <?php while ($tm_query->have_posts()) : $tm_query->the_post(); ?>
                  <div class="items">
                     <div class="review-text">
                        <div><?php echo get_the_content();?></div>
                     </div>
                     <div class="ree-row-set mt30">
                        <div class="media vcenter">
                           <div class="ree-details-set user-info p-0">
                              <h5><?php echo the_title();?></h5>
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

            <?php if($form_group): ?>
            <div class="col-lg-6">
               <div class="form-contact-hom m-mt60">
                  <div class="form-block bg-w">
                     <?php if(!empty($form_group['title'])): ?>
                     <div class="form-head">
                        <h4><?php echo $form_group['title'];?></h4>
                     </div>
                     <?php endif; ?>

                     <?php if(!empty($form_group['form'])): ?>
                     <div class="form-body">
                        <?php echo do_shortcode('[contact-form-7 id="'.$form_group['form'].'"]');?>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <?php endif; ?>

         </div>
   </div>            
</div>
<!--contact info end-->

<?php endif; ?>
<?php endwhile; ?>
<?php get_footer(); ?>