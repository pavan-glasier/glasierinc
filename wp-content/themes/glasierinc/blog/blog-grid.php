<?php
$wplogoutURL = urlencode(get_the_permalink());
$wplogoutTitle = urlencode(get_the_title());
$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
?>
<div class="col-lg-4 col-sm-6">
    <div class="ree-media-crd">
        <div class="rpl-img">
            <a href="<?php the_permalink();?>">
                <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="fill-fixed" />
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/2022/03/Image_not_available.png" >
                <?php }
                ?>
            </a>
        </div>
        <div class="rpl-contt">
            <div class="blog-quick-inf mb20 mt30">
                <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date( ' d M, Y ', $post->ID ); ?> </span>
                <span><i class="fas fa-clock"></i> <?php echo get_the_date( ' g:i A ', $post->ID ); ?></span>
            </div>
            <h4>
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h4>
        </div>
    </div>
</div>