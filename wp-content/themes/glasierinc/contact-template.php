<?php 

/**
* Template Name: Contact Us
*
*/

get_header(); ?>
<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'title_section' ) :
  $tagline = get_sub_field('tagline');
  $heading = get_sub_field('heading');
  $description = get_sub_field('description');
  $image = get_sub_field('image');
?>

<!--contact info-->
<div class="contact-head-sec pt85">
   <div class="container">
      <div class="row pt80">
         <div class="col-lg-6 vcenter">
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

         <?php if(!empty($image)): ?>
         <div class="col-lg-6 vcenter">
            <div class="sol-img m-mt30">
               <img src="<?php echo $image; ?>" alt="img" class="img-fluid">
            </div>
         </div>
         <?php endif; ?>
      </div>
   </div>
</div>
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'contact_info' ) :
  $form_group = get_sub_field('form_group');
  $contact_details = get_sub_field('contact_details');
  $follow_us = get_sub_field('follow_us');
?>
<div class="contact-form-sec sec-pad r-bg-a">
   <div class="container">
      <div class="row">
         <?php if($form_group): ?>
         <div class="col-lg-7">
            <div class="form-contact-hom m-mt60">
               <div class="form-block bg-w">
                  <?php if(!empty($form_group['title'])): ?>
                  <div class="form-head">
                     <h3><?php echo $form_group['title'];?></h3>
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

         <div class="col-lg-5">
            <div class="get-conct-2 pera-block d-ml50">
               <?php if($contact_details): ?>
                  <?php $get_in_touch = $contact_details['get_in_touch'];?>
               <h3><?php echo $get_in_touch['title'];?></h3>
               <div class="contact-detalnk">

                  <?php if(!empty($get_in_touch['phone_number'])): ?>
                  <a href="tel:<?php echo $get_in_touch['phone_number'];?>">
                     <i class="fas fa-phone-alt"></i> 
                     <span><?php echo $get_in_touch['phone_number'];?></span>
                  </a>
                  <?php endif; ?>

                  <?php if(!empty($get_in_touch['whatsapp'])): ?>
                     <?php 
                     $country_code = '91';
                     $result = ltrim( preg_replace("/[^0-9]+/", "",$get_in_touch['whatsapp']) , $country_code);
                     ?>
                  <a href="https://wa.me/<?php echo $result;?>?text=hello%0A" target="_blank">
                     <i class="fab fa-whatsapp"></i>
                     <span><?php echo $get_in_touch['whatsapp'];?></span>
                  </a>
                  <?php endif; ?>

                  <?php if(!empty($get_in_touch['email'])): ?>
                  <a href="mailto:<?php echo $get_in_touch['email'];?>">
                     <i class="fas fa-envelope"></i>
                     <span><?php echo $get_in_touch['email'];?></span>
                  </a>
                  <?php endif; ?>
                  <?php $contact_skype = $get_in_touch['skype'];
                     if ($contact_skype): ?>
                  <a href="skype:<?php echo $contact_skype['url'];?>"><i class="fab fa-skype"></i> <span><?php echo $contact_skype['title'];?></span></a>
                  <?php endif; ?>
               </div>


               <?php $addresses = $contact_details['addresses'];?>
               <h3 class="mt60"><?php echo $addresses['title'];?></h3>
               <div class="contact-detalnk">
                  <?php if(!empty($addresses['address'])): ?>
                  <a href="#" class="contact-addressii">
                     <i class="fas fa-map-marker-alt"></i>
                     <?php echo $addresses['address'];?>
                  </a>
                  <?php endif; ?>

                  <?php if(!empty($addresses['map_link'])): ?>
                  <a href="<?php echo $addresses['map_link'];?>" target="_blank">
                     <i class="fas fa-location-arrow"></i>
                     <span>Get Directions</span>
                  </a>  
                  <?php endif; ?>       
               </div>
               <?php endif; ?>

               <?php if($follow_us): ?>
               <h3 class="mt60"><?php echo $follow_us['title'];?></h3>
               <ul class="footer_social mt30">
                  <?php if(!empty($follow_us['facebook'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['facebook'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['instagram'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['instagram'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['twitter'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['twitter'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Twitter">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['medium'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['medium'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Medium">
                        <i class="fab fa-medium" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['dribbble'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['dribbble'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Dribbble">
                        <i class="fab fa-dribbble" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['behance'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['behance'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Behance">
                        <i class="fab fa-behance" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['pinterest'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['pinterest'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Pinterest">
                        <i class="fab fa-pinterest" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($follow_us['linkedin'])): ?>
                  <li>
                     <a href="<?php echo $follow_us['linkedin'];?>" target="_blank" data-toggle="tooltip" title="" data-original-title="Linkedin">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                     </a>
                  </li>
                  <?php endif; ?>
               </ul>
                <?php endif; ?>
            </div>
         </div>
      
      </div>
   </div>
</div>

<?php endif; ?>
<?php endwhile; ?>
<?php get_footer(); ?>