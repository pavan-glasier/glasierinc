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
							_e( 'Portfolio', 'glasierinc' );
						?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>



<!--page head-->
<div class="port-head-sec pt85 pb120 r-bg-a" style="display: none;">	
	<div class="container">
		<div class="row vcenter pt80">
			<div class="col-lg-7">
				<div class="page-headings">
					<span class="sub-heading mb15" data-aos="fade-in" data-aos-delay="200"><i class="fas fa-briefcase mr5"></i> Quality Work</span>
					<h1 class="mb15" data-aos="fade-in" data-aos-delay="400">Some of our <span class="ree-text rt40">Finest</span> work.</h1>
					<p class="h-light" data-aos="fade-in" data-aos-delay="600">We Have Built High Impact Solutions Across Industries.</p>
					<a href="get-quote.html" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-in" data-aos-delay="800">Get Quote <i class="fas fa-arrow-right fa-btn"></i></a>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="ree-card m-mt30 trust-review owl-carousel" data-aos="fade-in" data-aos-delay="500">

					<div class="items">
						<div class="review-text">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
						</div>
						<div class="ree-row-set mt30">
							<div class="media vcenter">
								<div class="ree-icon-set img-round80"><img src="images/user4.jpg" alt="img" class="img-fluid"></div>
								<div class="ree-details-set user-info">
									<h5>Lora Myka</h5>
									<p>ABC Business, <small>Jaipur, Rajasthan</small></p>
								</div>
							</div>
						</div>
					</div>

					<div class="items">
						<div class="review-text">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
						</div>
						<div class="ree-row-set mt30">
							<div class="media vcenter">
								<div class="ree-icon-set img-round80"><img src="images/user4.jpg" alt="img" class="img-fluid"></div>
								<div class="ree-details-set user-info">
									<h5>Lora Myka</h5>
									<p>ABC Business, <small>Jaipur, Rajasthan</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<div class="row mt70">				 
			<div class="col-lg-12">
				<div class="company-special-work">
					<h4>Check our portfolio on other websites as well.</h4>
					<div class="portfolio-source">

						<div class="port-ref-link">
							<a href="#"><img src="images/dribbble.svg" alt="dribbble-logo"> <span>Dribbble Portfolio</span> </a>
						</div>
						<div class="port-ref-link">
							<a href="#"><img src="images/behance.svg" alt="dribbble-logo"> <span>Behance Portfolio</span> </a>
						</div>
						<div class="port-ref-link">
							<a href="#"><img src="images/deviantart.svg" alt="dribbble-logo"> <span>Deviantart Portfolio</span> </a>
						</div>
						<div class="port-ref-link">
							<a href="#"><img src="images/instagram.svg" alt="dribbble-logo"> <span>Instagram Portfolio</span>	</a>
						</div>
						<div class="port-ref-link">
							<a href="#"><img src="images/artstations.svg" alt="dribbble-logo"> <span>Artstations Portfolio</span>	</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--page head end-->

<!--portfolio items-->
<div class="sec-pad">	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="page-headings text-center">
					<h2 class="mb15">Creative work</h2>
					<p>We have completed thousands of projects, some of them showing important projects here.</p>
				</div>
			</div>
		</div>
		<div class="portfolio-items mt60">
			<?php
			
			// Start the Loop.
			while ( have_posts() ) : the_post();  $row++; ?>
				<!-- portfolio row 1 -->
			<div class="row <?php if ($row%2==0) { ?>row-reverse<?php } ?>">
				<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
					<div class="hovr-scale-main">
						<div class="portfolio-flimg hovr-scale-base">
							<a href="<?php the_permalink();?>">
				                <?php 
				                if ( has_post_thumbnail() ) { ?>
				                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-fluid w-100" />
				                <?php }
				                else { ?>
				                    <img src="<?=site_url();?>/wp-content/uploads/2022/03/Image_not_available.png" class="img-fluid w-100" />
				                <?php }
				                ?>
				            </a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
					<div class="portfolio-detls pdr-dtls">
						<p class="port-tags">
							<?php 
                             $term_obj_list = get_the_terms( $post->ID, 'portfolio_category' );
                             echo $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                             ?>
						</p>
						<a href="<?php the_permalink();?>" class="port-title-main"><?php the_title();?></a>
						<a href="<?php the_permalink();?>" class="port-links ">Live view <i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
			</div>

			<?php endwhile; ?>

			<div class="row">
				<div class="col-lg-12 col-sm-12 mt100">
					<?php glasierinc_pagination(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
	<!--portfolio end-->

	<!--start cta-->
	<section class="r-bg-a sec-pad">
		<div class="container">
			<div class="ree">
				<div class="row">
					<div class="col-lg-6 vcenter">
						<div class="cta-heading">
							<h2 class="mb15">Hire world-class <span class="ree-text rt40">Developers</span> for your
								<span class="ree-text rt40">Project</span></h2>
							<p>We have a dexterity  team of designers & developers that works on clients projects excellently and delivers the project on timeline.</p>
							<a href="get-quote.html" class="ree-btn  ree-btn-grdt1 mw-80 mt40">Start Your Project <i class="fas fa-arrow-right fa-btn"></i></a>
						</div>
					</div>
					<div class="col-lg-6 vcenter">
						<div class="ct-sol-img">
							<img src="images/developers.svg" alt="app mockup" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--start cta-->

<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
