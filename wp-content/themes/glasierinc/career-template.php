<?php 

/**
* Template Name: Career Page
*
*/

get_header(); ?>

<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'title_section' ) :
  // $tagline = get_sub_field('tagline');
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
                    <!-- <span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Let's Talk</span> -->

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
  <?php if( get_row_layout() == 'process_of_interview' ) :
  $pro_heading = get_sub_field('heading');
  $pro_description = get_sub_field('description');
  $process_1 = get_sub_field('process_1');
  $process_2 = get_sub_field('process_2');
  $process_3 = get_sub_field('process_3');
?>
<section class="r-bg-d sec-pad">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12 text-center">
            <div class="page-headings">
               <?php if(!empty($pro_heading)): ?>
               <h1 class="mb15"><?php echo $pro_heading;?></h1>
               <?php endif; ?>

               <?php if(!empty($pro_description)): ?>
               <p><?php echo $pro_description;?></p>
               <?php endif; ?>
            </div>
         </div>
      </div>
      <div class="row justify-content-center mt30">
         <?php if($process_1) : ?>
         <div class="col-lg-3 col-md-6 col-sm-6 mt30">
            <div class="process-content ree-card">
               <div class="process-block">
                  <?php if(!empty($process_1['image'])) : ?>
                  <div class="process-icon">
                     <img src="<?php echo $process_1['image'];?>" alt="service" class="icon70 mb15">
                  </div>
                  <?php endif;?>

                  <?php if(!empty($process_1['title'])) : ?>
                  <h4><?php echo $process_1['title'];?></h4>
                  <?php endif;?>

                  <?php if(!empty($process_1['content'])) : ?>
                  <p><?php echo $process_1['content'];?></p>
                  <?php endif;?>
               </div>
            </div>
         </div>
         <?php endif; ?>
         
         <?php if($process_2) : ?>
         <div class="col-lg-3 col-md-6 col-sm-6 mt30">
            <div class="process-content ree-card">
               <div class="process-block">
                  <?php if(!empty($process_2['image'])) : ?>
                  <div class="process-icon">
                     <img src="<?php echo $process_2['image'];?>" alt="service" class="icon70 mb15">
                  </div>
                  <?php endif;?>

                  <?php if(!empty($process_2['title'])) : ?>
                  <h4><?php echo $process_2['title'];?></h4>
                  <?php endif;?>
                  
                  <?php if(!empty($process_2['content'])) : ?>
                  <p><?php echo $process_2['content'];?></p>
                  <?php endif;?>
               </div>
            </div>
         </div>
         <?php endif; ?>

         <?php if($process_3) : ?>
         <div class="col-lg-3 col-md-6 col-sm-6 mt30">
            <div class="process-content ree-card">
               <div class="process-block">
                  <?php if(!empty($process_3['image'])) : ?>
                  <div class="process-icon">
                     <img src="<?php echo $process_3['image'];?>" alt="service" class="icon70 mb15">
                  </div>
                  <?php endif;?>

                  <?php if(!empty($process_3['title'])) : ?>
                  <h4><?php echo $process_3['title'];?></h4>
                  <?php endif;?>
                  
                  <?php if(!empty($process_3['content'])) : ?>
                  <p><?php echo $process_3['content'];?></p>
                  <?php endif;?>
               </div>
            </div>
         </div>
         <?php endif; ?>

      </div>
   </div>
</section>
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'job_info' ) :
  $job_heading = get_sub_field('heading');
  $job_description = get_sub_field('description');
  $show_jobs = get_sub_field('show_jobs');
  if ($show_jobs) : ?>
<?php 
   $args = array(
       'post_type' => 'career',
       'order' => 'DESC',
       'posts_per_page' => -1,
      ); 
      ?>
     <?php $career_query = new WP_Query($args);
      if ($career_query->have_posts()) : ?>
         <section class="home-partners-block r-bg-f sec-pad" id="job">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="sec-heading text-center">
                        <?php if(!empty($job_heading)): ?>
                        <h1 class="mb15" style="color: #fff;"><?php echo $job_heading;?></h1>
                        <?php endif; ?>

                        <?php if(!empty($job_description)): ?>
                        <p style="color: #fff;"><?php echo $job_description;?></p>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center mt30">
               <?php while ($career_query->have_posts()) : $career_query->the_post(); ?>
                  <div class="col-lg-4 pt70" id="<?php echo $post->post_name;?>">
                     <div class="job-detail ree-card">
                        <h4><?php the_title();?></h4>
                        <span><?php echo meks_time_ago(); ?></span>
                        <div class="job-info w-100 mt30">
                           <div class="career-detail">
                              <p>Required Experience</p>
                              <p><?php the_field('required_experience')?></p>
                           </div>
                           <div class="career-detail">
                              <p>Number of Position</p>
                              <p><?php the_field('number_of_position')?></p>
                           </div>
                           <div class="career-detail">
                              <p>Job Location</p>
                              <p><?php the_field('job_location')?></p>
                           </div>
                           <div class="career-detail">
                              <p>Job Type</p>
                              <p><?php the_field('job_type')?></p>
                           </div>
                        </div>
                        <div class="job-titl mt40">
                           <!-- <a href="<?php the_permalink();?>" class="ree-btn  ree-btn-grdt2" style="line-height: 45px;">Job Details <i class="fas fa-arrow-right fa-btn"></i></a> -->
                           <a href="#popup-job" class="ree-btn ree-btn-grdt1 mw-80 no-shadows" id="apply-job" data-toggle="modal" data-target="#popup-job" data-title="" onclick="jobTitle('<?php the_title();?>');" style="line-height: 45px;">Apply Now <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
               </div>
            </div>
         </section>
         <?php wp_reset_postdata(); ?>
      <?php endif; ?>

<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>






<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'career_info' ) :
  $form_group = get_sub_field('form_group');
?>
<div id="popup-job" class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md max-width-800" style="pointer-events: all;">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-lg-12">
                 <div class="form-contact-hom m-mt60">
                    <div class="form-block bg-w">
                       <?php if(!empty($form_group['title'])): ?>
                       <div class="form-head" style="position: relative;">
                          <h3><?php echo $form_group['title'];?></h3>
                           <button type="button" class="close job-apply-close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
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
           </div>
        </div>
   </div>
</div>
<?php endif; ?>
<?php endwhile; ?>





<?php get_footer(); ?>
<script type="text/javascript">
function jobTitle(argument) {
   const options = document.getElementById("select_job").options;
   for (let i = 0; i < options.length; i++) {
      if (argument === options[i].value ) {
         options[i].selected = true;
      }
      else{
         options[i].selected = false;
      }
   }
}
</script>