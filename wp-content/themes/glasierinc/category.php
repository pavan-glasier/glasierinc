<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
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
			<div class="col-lg-5">
				<div class="page-headings">
					<span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Blogs & News</span>
					<h1 class="mb15"> <?php printf( __( 'Category : %s', 'glasierinc' ), '<span>' . single_cat_title( '', false ) . '</span>' );?></h1>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="ree-subs-from">
					<!-- <h4>Subscribe to get the latest insights in your inbox.</h4> -->
					<h4>Search</h4>
					<form class="mt20" role="search" method="get" action="<?=site_url();?>" >
						<input type="text" name="s" id="s" placeholder="Search keyword"
							class="subs-input">
						<button class="ree-btn-grdt1 subs-btn"><i class="fas fa-search"></i></button>
					</form>
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
