<?php 
global $post;

$post_slug = $post->post_name;

if ($post_slug == 'project-manager') {
//     $url = site_url()."/career/".$post_slug;
//     echo wp_redirect( $url ); exit; 
}elseif($post_slug == 'business-development-executive'){
// 	$url = site_url()."/career/".$post_slug;
//     echo wp_redirect( $url ); exit; 
}else{
	$url = site_url()."/career/#".$post_slug;
    echo wp_redirect( $url ); exit; 
}
?>
<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header();
?>
<style>
#process .content{
    background: #fcfcfc;
    padding: 35px;
    border-radius: 8px;
}
.float-right {
    float: right;
}
#process .content h1,
#process .content h2,
#process .content h3,
#process .content h4,
#process .content h5,
#process .content h6
{
    margin-bottom: 15px;
}
#process .content p
{
    margin-bottom: 20px;
}
#process .content input.form-control {
    height: calc(1.9em + .75rem + 2px);
}
#process .content .wpcf7-not-valid-tip {
    margin-top: 5px;
}
</style>

<div class="r-bg-a pt85 pb120">     
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-6">
                <div class="page-headings">
                    <h1 class="mb15"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ( !empty( get_the_content() ) ): ?>
<div class="sec-pad">
    <div id="process" class="work-process-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 info">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php edit_post_link( __( 'Edit', 'glasierinc' ), '<span class="edit-link float-right">', '</span>' ); ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php $form_group = get_field('form_group'); ?>
<?php if($form_group): ?>
<div class="contact-form-sec sec-pad r-bg-a">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
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
      </div>
   </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
<script type="text/javascript">
setTimeout(jobTitle, 500);
function jobTitle() {
    var argument = "<?php the_title();?>";
   const options = document.getElementById("select_job").options;
   for (let i = 0; i < options.length; i++) {
      if (argument == options[i].value ) {
         options[i].selected = true;
         break;
      }
      else{
         options[i].selected = false;
      }
   }
}
</script>
<!-- wpcf7mailsent -->
 <script type="text/javascript">
 document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '1472' == event.detail.contactFormId ) { 
     window.location.href = "<?=site_url();?>/thank-you";
    }
}, false );
</script>