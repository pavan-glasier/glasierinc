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

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Varela+Round&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/lending/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/lending/css/fonts-icons.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/lending/css/plugin-resets.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/lending/css/style.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/lending/css/responsive.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/lending/css/color.css">

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7BR93P');</script>
<!-- End Google Tag Manager -->
	
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
<body>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7BR93P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper">
      <div class="loader-container" id="loader">
         <div class="holder">
            <div class="la-line-scale la-2x">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div>
    <!-- Start  header -->
      <header id="header" class="dark-bg" data-scroll-index="0">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-4">
                  <div class="logo pull-left">
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php $lending_header_logo = get_field('lending_header_logo', 'option'); 
                        if ($lending_header_logo) : ?>
                        <img src="<?php echo esc_url( $lending_header_logo['url'] );?>" alt="<?php echo esc_attr( $lending_header_logo['alt'] );?>" class="img-responsive">
                        <?php endif; ?>
                     </a>
                  </div>
                  <a href="#" class="nav-opener pull-right"><i class="fa fa-bars" aria-hidden="true"></i></a>
               </div>
               <div class="col-xs-12 col-sm-8">
                  <ul class="list-inline text-right top-list">
                    <?php $header_email = get_field('header_email', 'option'); 
                    if(!empty($header_email)): ?>
                     <li>
                        <i class="fa fa-envelope main-color"></i>
                        <strong>Contact US :</strong>
                        <a href="mailto:<?php echo $header_email;?>"><?php echo $header_email;?></a>
                     </li>
                    <?php endif; ?>

                    <?php $header_phone = get_field('header_phone', 'option'); 
                    if(!empty($header_phone)): ?>
                     <li>
                        <i class="fa fa-phone main-color"></i>
                        <strong>Call Us :</strong>
                        <a href="tel:<?php echo str_replace(' ','',$header_phone); ?>"><?php echo $header_phone;?></a>
                     </li>
                     <?php endif; ?>
                  </ul>
               </div>
            </div>
         </div>
         <nav id="nav">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <?php $header_menu = get_field('header_menu', 'option'); ?>
                        <?php 
                            wp_nav_menu( array(
                                'theme_location'    => $header_menu['value'],
                                'container'         => 'ul',
                                'menu_class'        => 'nav-list list-inline',
                                'fallback_cb'       => false,
                                'link_class'        => 'smooth',
                                'data_scroll_nav'   => 0
                                )
                            );
                           ?>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <!-- End header -->


