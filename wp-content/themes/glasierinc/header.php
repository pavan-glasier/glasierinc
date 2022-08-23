<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<!-- Meta Tag -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<meta name="Robots" content="all">
<meta name="Googlebot" content="index, follow">
<meta name="Yahoobot" content="index, follow">
<meta name="MSNbot" content="index, follow">
<meta name="robots" content="Index, Follow">
<meta name="allow-search" content="yes">
<meta name="rating" content="General">
<meta name="document-distribution" content="Global">
<meta name="language" content="EN">
<meta name="author" content="Glasier Inc">
<meta name="copyright" content="glasierinc.com">
<meta name="reply-to" content="info@glasierinc.com">
<meta name="geo.country" content="UK">
<meta name="document-type" content="Public">
<meta name="document-rating" content="Safe for Kids">
<meta name="robots" content='max-image-preview:large' />
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>


<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7BR93P');</script>
<!-- End Google Tag Manager -->
	<meta name="facebook-domain-verification" content="0k5qtat5evvwad0nc6x1p4l810yoiz" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '245603730396550');
fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none" data-src="https://www.facebook.com/tr?id=245603730396550&ev=PageView&noscript=1" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=245603730396550&ev=PageView&noscript=1" />
    </noscript>
</noscript>
<!-- End Facebook Pixel Code -->
	
<!-- Google Tag Manager -->	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132672542-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-132672542-1');
gtag('config', 'AW-776430104');
</script>
<!-- Google Tag Manager -->
	
<!-- Schema Code -->
<script type='application/ld+json'>
    {
    "@context": "http://schema.org/", 
    "@type": "Organization", 
    "legalName": "Glasier inc", 
    "url": "https://www.glasierinc.com/", 
    "contactPoint": { 
    "@type": "ContactPoint", 
    "telephone": "+91-9925028258", 
    "contactType": "Local Business" 
    }, 
    "logo": "https://glasierinc.com/wp-content/uploads/2019/01/logo.png", 
    "sameAs": ["https://www.facebook.com/GlasierInc/", "https://www.linkedin.com/company/glasierinc","https://twitter.com/GlasierInc","https://medium.com/@GlasierInc","https://www.behance.net/glasierinc"],
    "address": { 
    "@type": "PostalAddress", 
    "streetAddress": "A/6, First Floor, Safal Profitaire, Corporate Rd, opp. Hotel Ramada, Prahlad Nagar", 
    "addressLocality": "Ahmedabad", 
    "addressRegion": "Gujarat", 
    "postalCode": "380015", 
    "addressCountry": "India" 
    } 
    }, 
"aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
    "ratingValue": "4.9",
    "reviewCount": "68"
    },
    "review": {
    "author": "Federico",
    "reviewRating": {
    "@type": "Rating",
    "bestRating": "5",
    "ratingValue": "5",
    }
    } 
 { 
    "@context": "http://schema.org/", 
    "@type": "WebSite", 
    "name": "Glasier Inc",
    "alternateName": "glasierinc", 
    "url": "https://www.glasierinc.com/"
    }
  </script>
    <meta property="og:image" content="https://www.glasierinc.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/01/webs1-1.png.webp">
<!-- //Schema Code Here -->

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7BR93P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!--Start Preloader -->
    <div class="onloadpage" id="page-load">
        <div class="loader-div">
            <div class="on-img">
                <!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/loader-2.gif" alt="Logo" class="img-fluid" /> -->
            </div>
        </div>
    </div>
    <!--End Preloader -->

    <!--Start Header-->
    <header class="ree-header fixed-top">
        <div class="container m-p-l-r-0">
            <div class="menu-header horzontl">
                <div class="menu-logo">
                     <div class="dskt-logo">
                        
                        <a class="nav-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                           <?php
                           $header_image = get_header_image();
                           if ( ! empty( $header_image ) ) :
                              ?>
                           <img src="<?php echo esc_url( $header_image ); ?>" class="ree-logo" alt="glasierinc" />
                           <?php endif; ?>
                           
                        </a>
                     </div>
                </div>

                <nav id='cssmenu'>
                    <?php $main_menu = get_field('main_menu', 'option'); ?>
                    <?php wp_nav_menu( array(
                           'theme_location'    => $main_menu['value'],
                           'container'         => 'ul',
                           'menu_class'        => 'nav-menus',
                            )
                       );
                       ?>
                </nav>
                <?php 
                  $header_link_btn = get_field('header_link_button', 'option');
                  if( $header_link_btn ): 
                      $header_link_btn_url = $header_link_btn['url'];
                      $header_link_btn_title = $header_link_btn['title'];
                      $header_link_btn_target = $header_link_btn['target'] ? $header_link_btn['target'] : '_self';
                      ?>
                     <div class="ree-nav-cta">
                        <ul>
                           <li>
                              <a href="<?php echo esc_url( $header_link_btn_url ); ?>" class="ree-btn ree-btn0 ree-btn-grdt2" target="<?php echo esc_attr( $header_link_btn_target ); ?>"> <?php echo esc_html( $header_link_btn_title ); ?></a> 
                           </li>
                        </ul>
                     </div>
                  <?php endif; ?>
                
                <div class="ree-nav-cta" style="display: none;">
                    <ul>
                        <li><span style="font-size:30px;cursor:pointer;color: #005186;" onclick="openNav()">&#9776;</span></li>
                    </ul>
                </div>
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <?php
                        if( $header_link_btn ): ?>
<!--                         <li>
                           <a href="<?php echo $header_link_btn['url'];?>" class="ree-btn2 ree-btn-grdt1">
                              <i class="fas fa-envelope-open-text"></i>
                           </a>
                        </li> -->
                        <?php endif; ?>

                        <li class="navm-">
                           <a class="toggle" href="#"> 
                              <span></span> 
                           </a> 
                        </li>
                    </ul>
                </div>
                <!--Start Web Side Menu -->
                <div id="mySidenav" class="sidenav" >
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <?php $side_menu = get_field('side_menu', 'option'); ?>
                    <?php wp_nav_menu( array(
                           'theme_location'    => $side_menu['value'],
                           'container'         => 'ul',
                           'menu_class'        => ''
                           )
                       );
                       ?>
                  </div>
                <!--End Web Side Menu-->
                <!-- mobile Nav -->
                <nav id="main-nav">
                  <?php $main_menu = get_field('main_menu', 'option'); ?>
                    <?php 
                        wp_nav_menu( array(
                           'theme_location'    => $main_menu['value'],
                           'container'         => 'ul',
                           'menu_class'        => ''
                            )
                        );
                       ?>
					
					<ul class="">
						<?php 
					  $header_link_btn = get_field('header_link_button', 'option');
					  if( $header_link_btn ): 
						  $header_link_btn_url = $header_link_btn['url'];
						  $header_link_btn_title = $header_link_btn['title'];
						  $header_link_btn_target = $header_link_btn['target'] ? $header_link_btn['target'] : '_self';
						  ?>
							   <li class="ree-hc">
								  <a href="<?php echo esc_url( $header_link_btn_url ); ?>" class="get-in-touch ree-btn ree-btn0 ree-btn-grdt2 " target="<?php echo esc_attr( $header_link_btn_target ); ?>" style="border: 1px solid;padding: 0 20px;border-radius: 100px;text-align: center;margin: 0 15px;"> <?php echo esc_html( $header_link_btn_title ); ?></a> 
							   </li>
					  <?php endif; ?>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->

