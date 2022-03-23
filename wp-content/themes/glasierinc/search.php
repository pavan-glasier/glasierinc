<?php
/**
 * The template for displaying Search Results pages
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
                    <h1 class="mb15"><?php printf( __( 'Search Results for: %s', 'glasierinc' ), '<span>' . get_search_query() . '</span>' );?> </h1>
                </div>
            </div>
        </div>
    </div>
</div>


	<?php //get_template_part( 'content', get_post_format() ); ?>

<div class="sec-pad">
  	<div class="container">
     	<div class="row justify-content-center">
        	<div class="col-lg-12 col-md-12 col-sm-12">
           		<div class="row ">
              		<div class="col-md-12">
						<div class="address-list text-center col-md-12">
						   <div class="row">
							<?php while ( have_posts() ) : the_post(); ?>

						      <div class="col-md-4 col-sm-12 mb30">
						         <div class="item item-box search-box" style="position: relative;">
						            <span class="badge"><?php echo get_post_type( get_the_ID());?></span>
						            <a href="<?php the_permalink();?>">
						            	<h4>
						            		<?php $title = get_the_title();
						            		$trim_title = wp_trim_words( $title, 5, "" );
						            		echo $trim_title;
						            		?>
						            			
					            		</h4>
						            </a>
						            <p style="font-size: 13px;line-height: normal;"><?php $content = get_the_content(); 
						            	$trim_cont = wp_trim_words( $content, 10, "" );
						            	echo $trim_cont;
						        	?></p>
						         </div>
						      </div>   

				            <?php endwhile; ?>                                                
						   </div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 mt100">
						<?php glasierinc_pagination(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php //glasierinc_content_nav( 'nav-below' ); ?>

<?php else : ?>

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
                    <h2 class="mb15"><?php _e( 'Nothing Found !', 'glasierinc' ); ?></h2>
                    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'glasierinc' ); ?></p>
                    <a class="ree-btn ree-btn0 ree-btn-grdt2 mt40" href="<?=site_url();?>">HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php get_footer(); ?>
