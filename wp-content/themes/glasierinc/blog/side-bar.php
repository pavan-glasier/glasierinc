<div class="col-lg-4 col-md-12 col-sm-12">
    <div class="sidebar">
        <div class="sidebar-widget sidebar-post">
            <div class="widget-title">
            <h3>Latest News</h3>
            </div>
            <div class="post-inner">
            <?php  $about_us = new WP_Query( array( 'post_type' => 'post' ,'order' => 'DESC', 'posts_per_page' => 5 ) );
                while($about_us->have_posts()) : $about_us->the_post();?>

                <div class="post">
                    <figure class="image-box">
                        <a href="<?php the_permalink();?>">

                            <?php 
                            if ( has_post_thumbnail() ) { ?>
                               <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  style="object-fit: cover;">
                            <?php } else {?>
                                <img src="<?=site_url();?>/wp-content/uploads/2021/11/no-preview.png"  style="object-fit: cover;">
                            <?php } ?>
                        </a>
                    </figure>
                    <div class="content-post">
                        <div class="post-date">
                            <p><?php echo get_the_date( 'M d, Y', $post->ID ); ?></p>
                            
                        </div>
                        <h5><a href="<?php the_permalink();?>">
                        <?php $title = get_the_title();
                        $trim_title = wp_trim_words( $title, 6, "" );
                        ?>
                        <?php echo $trim_title;?>
                        </a></h5>
                    </div>
                    
                </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="sidebar-widget sidebar-tags">
            <div class="widget-title">
                <h3>Categories</h3>
                <div class="widget-content">
                    <ul class="popular-tags">
                    <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                        } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sidebar-widget sidebar-tags">
            <div class="widget-title">
                <h3>Popular Tags</h3>
                <div class="widget-content">
                    <ul class="popular-tags">
                    <?php
                    $posttags = get_tags();
                        if ($posttags) {
                            $count = 1;
                            foreach($posttags as $tag) { ?>
                            
                                <li><a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>"><?php echo $tag->name; ?></a></li> 
                        <?php if($count == 5){ 
                                    break;
                                }
                            ?>
                            <?php $count++; }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>