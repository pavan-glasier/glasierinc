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
      <div class="row ">
         <div class="col-lg-7 vcenter">
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
         <div class="col-lg-5 vcenter">
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
		  
	<?php
		    $contact_details = get_sub_field('contact_details');
  			$follow_us = get_sub_field('follow_us');
		  $country = getCountry();
		  $india_contact = get_field('india_contact', 'option');
		  $usa_contact = get_field('usa_contact', 'option');
		  $uk_contact = get_field('uk_contact', 'option');
		  $canada = get_field('canada', 'option');

		  ?>
         <div class="col-lg-5">
            <div class="get-conct-2 pera-block d-ml50">
               <?php if(!empty($contact_details['get_in_touch_heading'])): ?>
               <h3><?php echo $contact_details['get_in_touch_heading'];?></h3>
				<?php endif; ?>
				
               <div class="contact-detalnk">
				   <?php if( !empty( $usa_contact['phone'] ) ): ?>
					   <a href="tel:<?php echo str_replace(' ','',$usa_contact['phone']); ?>">
						   <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-united-states-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
						   <span><?php echo $usa_contact['phone']; ?></span>
					   </a>
				   <?php endif; ?>
				   
				   <?php if( !empty( $uk_contact['phone'] ) ): ?>
					   <a href="tel:<?php echo str_replace(' ','',$uk_contact['phone']); ?>">
						   <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-great-britain-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
						   <span><?php echo $uk_contact['phone']; ?></span>
					   </a>
				   <?php endif; ?>
				   
				   <?php if( !empty( $canada['phone'] ) ): ?>
					   <a href="tel:<?php echo str_replace(' ','',$canada['phone']); ?>">
						   <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-canada-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
						   <span><?php echo $canada['phone']; ?></span>
					   </a>
				   <?php endif; ?>
				   
				   <?php if( !empty( $india_contact['phone'] ) ): ?>
					   <a href="tel:<?php echo str_replace(' ','',$india_contact['phone']); ?>">
						   <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-india-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
						   <span><?php echo $india_contact['phone']; ?></span>
					   </a>
				   <?php endif; ?>
				   
				   <?php if(!empty($india_contact['email'])): ?>
					  <a href="mailto:<?php echo $india_contact['email'];?>" target="_blank">
						 <i class="fas fa-envelope fa-xl"></i>
						 <span><?php echo $india_contact['email']; ?></span>
					  </a>
                  <?php endif; ?>
				   
				   <?php
				   $skype = $india_contact['skype'];
				   if( $skype ): 
				   $skype_url = $skype['url'];
				   $skype_title = $skype['title'];
				   $skype_target = $skype['target'] ? $skype['target'] : '_self';
				   ?>
					  <a href="skype:<?php echo $skype_url; ?>" target="<?php echo esc_attr( $skype_target ); ?>">
						 <i class="fab fa-skype fa-xl"></i>
						 <span><?php echo esc_html( $skype_title ); ?></span>
					  </a>
				   <?php endif; ?>
				   
               </div>


				<?php if( !empty( $contact_details['addresses_heading'] ) ): ?>
               <h3 class="mt60"><?php echo $contact_details['addresses_heading'];?></h3>
				<?php endif; ?>
				
               <div class="contact-detalnk">
                  <?php if(!empty($usa_contact['address'])): ?>
                  <a href="#" class="contact-addressii">
                     <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-united-states-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
                     <?php echo $usa_contact['address'];?>
                  </a>
                  <?php endif; ?>
				   
				   <?php if(!empty($uk_contact['address'])): ?>
                  <a href="#" class="contact-addressii">
                     <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-great-britain-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
                     <?php echo $uk_contact['address'];?>
                  </a>
                  <?php endif; ?>
				   
				   <?php if(!empty($canada['address'])): ?>
                  <a href="#" class="contact-addressii">
                     <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-canada-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
                     <?php echo $canada['address'];?>
                  </a>
                  <?php endif; ?>
				   
				   <?php if(!empty($india_contact['address'])): ?>
                  <a href="#" class="contact-addressii">
                     <img src="<?php echo site_url();?>/wp-content/uploads/2022/04/icons8-india-48.png" style="margin-left: -22px;width: 35px;margin-right: 15px;" />
                     <?php echo $india_contact['address'];?>
                  </a>
                  <?php endif; ?>
				   
               </div>
				
				
               <?php if($follow_us): ?>
				<?php if(!empty($contact_details['follow_us_heading'])): ?>
               <h3 class="mt60"><?php echo $contact_details['follow_us_heading'];?></h3>
				<?php endif; ?>
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

<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'here_to_help' ) :
  $here_to_help_heading = get_sub_field('heading');
  $here_to_help_description = get_sub_field('description');
  $three_boxes = get_sub_field('three_boxes');

?>
<section class="r-bg-c sec-pad">
	<div class="container">
		<?php if(!empty($here_to_help_heading)): ?>
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="page-headings">
					<h2><?php echo $here_to_help_heading; ?></h2>
					<p class="mt15"><?php echo $here_to_help_description;?></p>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if($three_boxes) : 
		$box_1 = $three_boxes['box_1'];
		$box_2 = $three_boxes['box_2'];
		$box_3 = $three_boxes['box_3'];
		?>
		<div class="row mt30">
			<?php if($box_1) : ?>
			<div class="col-lg-4 col-sm-6">
				<div class="ree-card mt30 pera-block ree-card-content">
					<?php if(!empty($box_1['icon'])): ?>
					<img src="<?php echo $box_1['icon']; ?>" alt="services" width="60" class="mb20">
					<?php endif; ?>
					
					<?php if(!empty($box_1['title'])): ?>
					<h3><?php echo $box_1['title'];?></h3>
					<?php endif; ?>
					
					<?php if(!empty($box_1['content'])): ?>
					<p><?php echo $box_1['content'];?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			
			
			<?php if($box_2) : ?>
			<div class="col-lg-4 col-sm-6">
				<div class="ree-card mt30 pera-block ree-card-content">
					<?php if(!empty($box_2['icon'])): ?>
					<img src="<?php echo $box_2['icon']; ?>" alt="services" width="60" class="mb20">
					<?php endif; ?>
					
					<?php if(!empty($box_2['title'])): ?>
					<h3><?php echo $box_2['title'];?></h3>
					<?php endif; ?>
					
					<?php if(!empty($box_2['content'])): ?>
					<p><?php echo $box_2['content'];?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>

			<?php if($box_3) : ?>
			<div class="col-lg-4 col-sm-6">
				<div class="ree-card mt30 pera-block ree-card-content">
					<?php if(!empty($box_3['icon'])): ?>
					<img src="<?php echo $box_3['icon']; ?>" alt="services" width="60" class="mb20">
					<?php endif; ?>
					
					<?php if(!empty($box_3['title'])): ?>
					<h3><?php echo $box_3['title'];?></h3>
					<?php endif; ?>
					
					<?php if(!empty($box_3['content'])): ?>
					<p><?php echo $box_3['content'];?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>

		</div>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'five_icon_box' ) :
  $icon_box_1 = get_sub_field('icon_box_1');
  $icon_box_2 = get_sub_field('icon_box_2');
  $icon_box_3 = get_sub_field('icon_box_3');
  $icon_box_4 = get_sub_field('icon_box_4');
  $icon_box_5 = get_sub_field('icon_box_5');

?>
<div class="pt60 pb60 r-bg-d">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="icon-block-ree">
					<?php if($icon_box_1): ?>
					<div class="icon-card-title">
						<?php if(!empty($icon_box_1['icon'])): ?>
						<img src="<?php echo $icon_box_1['icon']; ?>" alt="services">
						<?php endif; ?>
							
						<?php if(!empty($icon_box_1['title'])): ?>
						<p><?php echo $icon_box_1['title'];?></p>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
					<?php if($icon_box_2): ?>
					<div class="icon-card-title">
						<?php if(!empty($icon_box_2['icon'])): ?>
						<img src="<?php echo $icon_box_2['icon']; ?>" alt="services">
						<?php endif; ?>
							
						<?php if(!empty($icon_box_2['title'])): ?>
						<p><?php echo $icon_box_2['title'];?></p>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
					<?php if($icon_box_3): ?>
					<div class="icon-card-title">
						<?php if(!empty($icon_box_3['icon'])): ?>
						<img src="<?php echo $icon_box_3['icon']; ?>" alt="services">
						<?php endif; ?>
							
						<?php if(!empty($icon_box_3['title'])): ?>
						<p><?php echo $icon_box_3['title'];?></p>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
					<?php if($icon_box_4): ?>
					<div class="icon-card-title">
						<?php if(!empty($icon_box_4['icon'])): ?>
						<img src="<?php echo $icon_box_4['icon']; ?>" alt="services">
						<?php endif; ?>
							
						<?php if(!empty($icon_box_4['title'])): ?>
						<p><?php echo $icon_box_4['title'];?></p>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
					<?php if($icon_box_5): ?>
					<div class="icon-card-title">
						<?php if(!empty($icon_box_5['icon'])): ?>
						<img src="<?php echo $icon_box_5['icon']; ?>" alt="services">
						<?php endif; ?>
							
						<?php if(!empty($icon_box_5['title'])): ?>
						<p><?php echo $icon_box_5['title'];?></p>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					

				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>




<?php get_footer(); ?>