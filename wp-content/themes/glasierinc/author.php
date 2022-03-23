<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

<?php
	/*
	 * Queue the first post, that way we know
	 * what author we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	the_post();
?>

<?php 
//$author_bio_avatar_size = apply_filters( 'glasierinc_author_bio_avatar_size', 68 );
//echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
?>
<div class="r-bg-a pt85 pb120">		
	<div class="container">
		<div class="row pt80">
			<div class="col-lg-5">
				<div class="page-headings">
					<span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Author</span>
					<h1 class="mb15"> <?php printf( __( '%s', 'glasierinc' ), '<span class="ree-text rt40 vcard">' . get_the_author() . '</span>' );?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	/*
	 * Since we called the_post() above, we need
	 * to rewind the loop back to the beginning.
	 * That way we can run the loop properly, in full.
	 */
	rewind_posts();
?>

<?php //glasierinc_content_nav( 'nav-above' ); ?>

<div class="blog-block sec-pad pt80">		
	<div class="container">
		<div class="blog-post">
			<div class="row">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					include('blog/blog-grid.php');
				endwhile; ?>
				<div class="col-lg-12 col-sm-12 mt100">
					<?php glasierinc_pagination(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
