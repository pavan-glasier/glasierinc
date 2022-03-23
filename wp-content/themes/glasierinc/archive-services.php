<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, glasierinc already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
<div class="r-bg-a pt85 pb120">		
	<div class="container">
		<div class="row pt80">
			<div class="col-lg-6">
				<div class="page-headings">
					<!-- <span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Blogs & News</span> -->
					<h1 class="mb15">
						<?php
							_e( 'Services', 'glasierinc' );
						?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="r-bg-i sec-pad">
    <div class="container">
    	<div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="sec-heading text-center pera-block">
                    <h2> See what we can <span class="ree-text rt40">do</span> for <span class="ree-text rt40">you</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                </div>
            </div>
        </div>
		<div class="row mt30">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>
		  	<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
		     	<div class="ree-card r-bg-c mt60">
			        <div class="ree-card-img shadows">
			           <?php 
			           if ( has_post_thumbnail() ) { ?>
			              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  alt="<?php echo get_the_title(); ?>" />
			           <?php }
			           else { ?>
			              <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/no-image-icon-4.png" alt="<?php echo get_the_title(); ?>" />
			           <?php }
			           ?>
			        </div>
		        	<div class="ree-card-content mt40">
			           <h3 class="mb15">
			              <a href="<?php the_permalink();?>"><?php the_title();?></a>
			           </h3>
			           <?php 
			           $content = get_the_content();
			           $trim_content = wp_trim_words($content, 15, ".")
			           ?>
			           <p>
			              <?php echo $trim_content;?>
			           </p>
		        	</div>
			        <div class="ree-card-content-link">
			           <a href="<?php the_permalink();?>" class="ree-card-link mt40">Read More 
			              <i class="fas fa-arrow-right fa-btn"></i> </a>
			        </div>
		     	</div>
		  	</div>
		  <?php endwhile; ?>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 mt100">
				<?php glasierinc_pagination(); ?>
			</div>
		</div>
	</div>
</section>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
