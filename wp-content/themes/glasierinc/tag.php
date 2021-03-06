<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
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
						<?php printf( __( 'Tag : %s', 'glasierinc' ), '<span>' . single_tag_title( '', false ) . '</span>' );?>
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
				<div class="col-lg-8 col-sm-12">
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
                <?php include('blog/side-bar.php');?>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
