<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
<!--blog-->
<div class="r-bg-a pt85 pb120">		
	<div class="container">
		<div class="row pt80">
			<div class="col-lg-5">
				<div class="page-headings">
					<span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Blogs & News</span>
					<h1 class="mb15">Our <span class="ree-text rt40">Blog</span></h1>
					<p>What would you love to learn how to do?</p>
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

<div class="blog-block sec-pad pt80 blog-list">		
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

<?php
if ( current_user_can( 'edit_posts' ) ) : // Show a different message to a logged-in user who can add posts.
?>
<div class="r-bg-a pt85 pb120">     
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-6">
                <div class="page-headings">
                    <h1 class="mb15"><?php _e( 'No posts to display', 'glasierinc' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15"><?php _e( 'No posts to display', 'glasierinc' ); ?></h2>
                    <p><?php
					/* translators: %s: Post editor URL. */
					printf( __( 'Ready to publish your first post? <br/><br/><a href="%s" class="ree-btn ree-btn0 ree-btn-grdt2 ">Get started here</a>.', 'glasierinc' ), admin_url( 'post-new.php' ) );
					?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
else : // Show the default message to everyone else.
?>
<div class="r-bg-a pt85 pb120">     
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-6">
                <div class="page-headings">
                    <h1 class="mb15"><?php _e( 'Nothing Found', 'glasierinc' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sec-pad">   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15"><?php _e( 'Nothing Found', 'glasierinc' ); ?></h2>
                    <p> <?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'glasierinc' ); ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; // End current_user_can() check. ?>

<?php endif; // End have_posts() check. ?>

<?php get_footer(); ?>
