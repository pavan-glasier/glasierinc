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

    <footer id="footer" class="dark-bg pad-top-xs pad-bottom-xs">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-4">
                <div class="logo pull-left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php $lending_footer_logo = get_field('lending_footer_logo', 'option'); 
                        if ($lending_footer_logo) : ?>
                        <img src="<?php echo esc_url( $lending_footer_logo['url'] );?>" alt="<?php echo esc_attr( $lending_footer_logo['alt'] );?>" class="img-responsive">
                        <?php endif; ?>
                     </a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-8">
                <ul class="list-inline text-right top-list">
                   <?php $footer_email = get_field('footer_email', 'option'); 
                    if(!empty($footer_email)): ?>
                     <li>
                        <i class="fa fa-envelope main-color"></i>
                        <strong>Contact US :</strong>
                        <a href="mailto:<?php echo $footer_email;?>"><?php echo $footer_email;?></a>
                     </li>
                    <?php endif; ?>

                    <?php $footer_phone = get_field('footer_phone', 'option'); 
                    if(!empty($footer_phone)): ?>
                     <li>
                        <i class="fa fa-phone main-color"></i>
                        <strong>Call Us :</strong>
                        <a href="tel:<?php echo str_replace(' ','',$footer_phone); ?>"><?php echo $footer_phone;?></a>
                     </li>
                     <?php endif; ?>
                </ul>
             </div>
          </div>
       </div>
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-6 bottom">
                <p><?php echo get_field('copyright', 'option'); ?></p>
             </div>
             <?php $social_media = get_field('social_media', 'option');
             if ($social_media): ?>
             <div class="col-xs-12 col-sm-6 bottom">
                <ul class="list-inline text-right mt-social">
                    <?php if(!empty($social_media['facebook'])): ?>
                    <li><a href="<?php echo esc_url($social_media['facebook']);?>"><i class="fa fa-facebook"></i></a></li>
                    <?php endif; ?>

                    <?php if(!empty($social_media['behance'])): ?>
                   <li><a href="<?php echo esc_url($social_media['behance']);?>"><i class="fa fa-behance"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['twitter'])): ?>
                   <li><a href="<?php echo esc_url($social_media['twitter']);?>"><i class="fa fa-twitter"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['instagram'])): ?>
                   <li><a href="<?php echo esc_url($social_media['instagram']);?>"><i class="fa fa-instagram"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['medium'])): ?>
                   <li><a href="<?php echo esc_url($social_media['medium']);?>"><i class="fa fa-medium"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['dribbble'])): ?>
                   <li><a href="<?php echo esc_url($social_media['dribbble']);?>"><i class="fa fa-dribbble"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['linkedin'])): ?>
                   <li><a href="<?php echo esc_url($social_media['linkedin']);?>"><i class="fa fa-linkedin"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['pinterest'])): ?>
                   <li><a href="<?php echo esc_url($social_media['pinterest']);?>"><i class="fa fa-pinterest"></i></a></li>
                   <?php endif; ?>

                   <?php if(!empty($social_media['youtube'])): ?>
                   <li><a href="<?php echo esc_url($social_media['youtube']);?>"><i class="fa fa-youtube"></i></a></li>
                   <?php endif; ?>
                </ul>
             </div>
            <?php endif; ?>
          </div>
       </div>
    </footer>
    <span id="back-top" class="fa fa-angle-up main-bg-color"></span>
    <div class="popup-holder">
       <div id="popup1" class="lightbox">
          <section class="quote-form" style="background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/lending/images/img02.jpg);">
             <h2 class="form-heading text-center text-uppercase">register now</h2>
             <span class="form-title text-center">Take your free trial</span>
             <form id="contactForm2" data-toggle="validator">
                <fieldset>
                   <div class="form-group">
                      <input type="text" id="name2" placeholder="Your Name" class="form-control" required
                         data-error="NEW ERROR MESSAGE">
                   </div>
                   <div class="form-group">
                      <input type="email" id="email2" placeholder="Your Email" class="form-control" required
                         data-error="NEW ERROR MESSAGE">
                   </div>
                   <div class="form-group">
                      <input type="tel" id="phone2" placeholder="Phone Number" class="form-control" required
                         data-error="NEW ERROR MESSAGE">
                   </div>
                   <div id="msgSubmit2" class="form-message hidden"></div>
                   <span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will
                   never share your personal info</span>
                   <button class="btn btn-default main-bg-color" type="submit" id="form-submit2">GET A
                   QUOTE</button>
                </fieldset>
             </form>
          </section>
       </div>
    </div>
</div>


<script src="<?php echo esc_url( get_template_directory_uri() );?>/lending/js/jquery.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() );?>/lending/js/plugins.js" defer></script>
<script src="<?php echo esc_url( get_template_directory_uri() );?>/lending/js/jquery.main.js" defer></script>
<script>
 'use strict'
 var testim = document.getElementById("testim"),
 testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
    touchStartPos,
    touchEndPos,
    touchPosDiff,
    ignoreTouch = 30;
 ;
 window.onload = function() {
   // Testim Script
   function playSlide(slide) {
       for (var k = 0; k < testimDots.length; k++) {
           testimContent[k].classList.remove("active");
           testimContent[k].classList.remove("inactive");
           testimDots[k].classList.remove("active");
       }
       if (slide < 0) {
           slide = currentSlide = testimContent.length-1;
       }
       if (slide > testimContent.length - 1) {
           slide = currentSlide = 0;
       }
       if (currentActive != currentSlide) {
           testimContent[currentActive].classList.add("inactive");
       }
       testimContent[slide].classList.add("active");
       testimDots[slide].classList.add("active");
       currentActive = currentSlide;
       clearTimeout(testimTimer);
       testimTimer = setTimeout(function() {
           playSlide(currentSlide += 1);
       }, testimSpeed)
   }
   testimLeftArrow.addEventListener("click", function() {
       playSlide(currentSlide -= 1);
   })
   testimRightArrow.addEventListener("click", function() {
       playSlide(currentSlide += 1);
   })
   for (var l = 0; l < testimDots.length; l++) {
       testimDots[l].addEventListener("click", function() {
           playSlide(currentSlide = testimDots.indexOf(this));
       })
   }
   playSlide(currentSlide);
 
   // keyboard shortcuts
 
   document.addEventListener("keyup", function(e) {
       switch (e.keyCode) {
           case 37:
               testimLeftArrow.click();
               break;

           case 39:
               testimRightArrow.click();
               break;

           case 39:
               testimRightArrow.click();
               break;
           default:
               break;
       }
   })
 testim.addEventListener("touchstart", function(e) {
        touchStartPos = e.changedTouches[0].clientX;
 })
 testim.addEventListener("touchend", function(e) {
        touchEndPos = e.changedTouches[0].clientX;
        touchPosDiff = touchStartPos - touchEndPos;
        console.log(touchPosDiff);
        console.log(touchStartPos);
        console.log(touchEndPos);
        if (touchPosDiff > 0 + ignoreTouch) {
                testimLeftArrow.click();
        } else if (touchPosDiff < 0 - ignoreTouch) {
                testimRightArrow.click();
        } else {
            return;
        }
 })
 }
</script>
<?php wp_footer(); ?>
</body>
</html>


