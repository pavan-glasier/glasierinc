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
					<span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Blogs & News</span>
					<h1 class="mb15">
						<?php
						if ( is_day() ) {
							/* translators: %s: Date. */
							printf( __( 'Daily Archives: %s', 'glasierinc' ), '<span>' . get_the_date() . '</span>' );
						} elseif ( is_month() ) {
							/* translators: %s: Date. */
							printf( __( 'Monthly Archives: %s', 'glasierinc' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'glasierinc' ) ) . '</span>' );
						} elseif ( is_year() ) {
							/* translators: %s: Date. */
							printf( __( 'Yearly Archives: %s', 'glasierinc' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'glasierinc' ) ) . '</span>' );
						} else {
							_e( 'Archives', 'glasierinc' );
						}
						?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

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
