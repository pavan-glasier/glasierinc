<?php
/**
 * glasierinc functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://developer.wordpress.org/plugins/
 *
 * @package WordPress
 * @subpackage glasierinc
 * @since glasierinc 1.0
 */

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 625;
}

/**
 * glasierinc setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * glasierinc supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 *  custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since glasierinc 1.0
 */
function glasierinc_setup() {
	/*
	 * Makes glasierinc available for translation.
	 *
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/glasierinc
	 * If you're building a theme based on glasierinc, use a find and replace
	 * to change 'glasierinc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'glasierinc' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom color scheme.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Blue', 'glasierinc' ),
				'slug'  => 'blue',
				'color' => '#21759b',
			),
			array(
				'name'  => __( 'Dark Gray', 'glasierinc' ),
				'slug'  => 'dark-gray',
				'color' => '#444',
			),
			array(
				'name'  => __( 'Medium Gray', 'glasierinc' ),
				'slug'  => 'medium-gray',
				'color' => '#9f9f9f',
			),
			array(
				'name'  => __( 'Light Gray', 'glasierinc' ),
				'slug'  => 'light-gray',
				'color' => '#e6e6e6',
			),
			array(
				'name'  => __( 'White', 'glasierinc' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
		)
	);

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.


		register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'glasierinc' ),
            'side_menu' => __( 'Sidebar Menu', 'glasierinc' ),
            'services_menu'  => __( 'Services Menu', 'glasierinc' ),
            'industries_menu'  => __( 'Industries Menu', 'glasierinc' ),
            'portfolios_menu'  => __( 'Portfolios Menu', 'glasierinc' ),
						'footer_bottom'  => __( 'Footer Bottom Menu', 'glasierinc' ),
						'lending_menu'  => __( 'Lending Page Menu', 'glasierinc' ),
        ) );




add_filter( 'auto_update_plugin', '__return_false' );

add_filter( 'auto_update_theme', '__return_false' );



	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'e6e6e6',
		)
	);

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop.

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'glasierinc_setup' );




  // Register Nav Walker class_alias
  require_once('wp-bootstrap-navwalker.php');

/**
 * Add support for a custom header image.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Add block patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Return the Google font stylesheet URL if available.
 *
 * The use of Open Sans by default is localized. For languages that use
 * characters not supported by the font, the font can be disabled.
 *
 * @since glasierinc 1.2
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function glasierinc_get_font_url() {
	$font_url = '';

	/*
	 * translators: If there are characters in your language that are not supported
	 * by Open Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'glasierinc' ) ) {
		$subsets = 'latin,latin-ext';

		/*
		 * translators: To add an additional Open Sans character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'glasierinc' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family'  => urlencode( 'Open Sans:400italic,700italic,400,700' ),
			'subset'  => urlencode( $subsets ),
			'display' => urlencode( 'fallback' ),
		);
		$font_url   = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for front end.
 *
 * @since glasierinc 1.0
 */
function glasierinc_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'glasierinc-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20141205', true );

	$font_url = glasierinc_get_font_url();
	if ( ! empty( $font_url ) ) {
		wp_enqueue_style( 'glasierinc-fonts', esc_url_raw( $font_url ), array(), null );
	}

	// Loads our main stylesheet.
	wp_enqueue_style( 'glasierinc-style', get_stylesheet_uri(), array(), '20190507' );

	// Theme block stylesheet.
	wp_enqueue_style( 'glasierinc-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'glasierinc-style' ), '20190406' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'glasierinc-ie', get_template_directory_uri() . '/css/ie.css', array( 'glasierinc-style' ), '20150214' );
	$wp_styles->add_data( 'glasierinc-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'glasierinc_scripts_styles' );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since glasierinc 2.6
 */
function glasierinc_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'glasierinc-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20190406' );
	// Add custom fonts.
	wp_enqueue_style( 'glasierinc-fonts', glasierinc_get_font_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'glasierinc_block_editor_styles' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since glasierinc 2.2
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function glasierinc_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'glasierinc-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'glasierinc_resource_hints', 10, 2 );

/**
 * Filter TinyMCE CSS path to include Google Fonts.
 *
 * Adds additional stylesheets to the TinyMCE editor if needed.
 *
 * @uses glasierinc_get_font_url() To get the Google Font stylesheet URL.
 *
 * @since glasierinc 1.2
 *
 * @param string $mce_css CSS path to load in TinyMCE.
 * @return string Filtered CSS path.
 */
function glasierinc_mce_css( $mce_css ) {
	$font_url = glasierinc_get_font_url();

	if ( empty( $font_url ) ) {
		return $mce_css;
	}

	if ( ! empty( $mce_css ) ) {
		$mce_css .= ',';
	}

	$mce_css .= esc_url_raw( str_replace( ',', '%2C', $font_url ) );

	return $mce_css;
}
add_filter( 'mce_css', 'glasierinc_mce_css' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since glasierinc 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function glasierinc_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		/* translators: %s: Page number. */
		$title = "$title $sep " . sprintf( __( 'Page %s', 'glasierinc' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'glasierinc_wp_title', 10, 2 );

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since glasierinc 1.0
 */
function glasierinc_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ) {
		$args['show_home'] = true;
	}
	return $args;
}
add_filter( 'wp_page_menu_args', 'glasierinc_page_menu_args' );

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since glasierinc 1.0
 */
function glasierinc_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'glasierinc' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'glasierinc' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'First Front Page Widget Area', 'glasierinc' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'glasierinc' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Second Front Page Widget Area', 'glasierinc' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'glasierinc' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'glasierinc_widgets_init' );

if ( ! function_exists( 'glasierinc_content_nav' ) ) :
	/**
	 * Displays navigation to next/previous pages when applicable.
	 *
	 * @since glasierinc 1.0
	 */
	function glasierinc_content_nav( $html_id ) {
		global $wp_query;

		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav id="<?php echo esc_attr( $html_id ); ?>" class="navigation" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'glasierinc' ); ?></h3>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'glasierinc' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'glasierinc' ) ); ?></div>
			</nav><!-- .navigation -->
			<?php
	endif;
	}
endif;

if ( ! function_exists( 'glasierinc_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own glasierinc_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since glasierinc 1.0
	 */
	function glasierinc_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
				// Display trackbacks differently than normal comments.
				?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'glasierinc' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'glasierinc' ), '<span class="edit-link">', '</span>' ); ?></p>
				<?php
				break;
			default:
				// Proceed with normal comments.
				global $post;
				?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf(
						'<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'glasierinc' ) . '</span>' : ''
					);
					printf(
						'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: Date, 2: Time. */
						sprintf( __( '%1$s at %2$s', 'glasierinc' ), get_comment_date(), get_comment_time() )
					);
				?>
				</header><!-- .comment-meta -->

				<?php
				$commenter = wp_get_current_commenter();
				if ( $commenter['comment_author_email'] ) {
					$moderation_note = __( 'Your comment is awaiting moderation.', 'glasierinc' );
				} else {
					$moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'glasierinc' );
				}
				?>

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php echo $moderation_note; ?></p>
				<?php endif; ?>

				<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'glasierinc' ), '<p class="edit-link">', '</p>' ); ?>
				</section><!-- .comment-content -->

				<div class="reply">
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'reply_text' => __( 'Reply', 'glasierinc' ),
							'after'      => ' <span>&darr;</span>',
							'depth'      => $depth,
							'max_depth'  => $args['max_depth'],
						)
					)
				);
				?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->
				<?php
				break;
		endswitch; // End comment_type check.
	}
endif;

if ( ! function_exists( 'glasierinc_entry_meta' ) ) :
	/**
	 * Set up post entry meta.
	 *
	 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
	 *
	 * Create your own glasierinc_entry_meta() to override in a child theme.
	 *
	 * @since glasierinc 1.0
	 */
	function glasierinc_entry_meta() {
		/* translators: Used between list items, there is a space after the comma. */
		$categories_list = get_the_category_list( __( ', ', 'glasierinc' ) );

		/* translators: Used between list items, there is a space after the comma. */
		$tags_list = get_the_tag_list( '', __( ', ', 'glasierinc' ) );

		$date = sprintf(
			'<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$author = sprintf(
			'<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			/* translators: %s: Author display name. */
			esc_attr( sprintf( __( 'View all posts by %s', 'glasierinc' ), get_the_author() ) ),
			get_the_author()
		);

		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			/* translators: 1: Category name, 2: Tag name, 3: Date, 4: Author display name. */
			$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'glasierinc' );
		} elseif ( $categories_list ) {
			/* translators: 1: Category name, 3: Date, 4: Author display name. */
			$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'glasierinc' );
		} else {
			/* translators: 3: Date, 4: Author display name. */
			$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'glasierinc' );
		}

		printf(
			$utility_text,
			$categories_list,
			$tags_list,
			$date,
			$author
		);
	}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since glasierinc 1.0
 *
 * @param array $classes Existing class values.
 * @return array Filtered class values.
 */
function glasierinc_body_class( $classes ) {
	$background_color = get_background_color();
	$background_image = get_background_image();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) ) {
		$classes[] = 'full-width';
	}

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() ) {
			$classes[] = 'has-post-thumbnail';
		}
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) ) {
			$classes[] = 'two-sidebars';
		}
	}

	if ( empty( $background_image ) ) {
		if ( empty( $background_color ) ) {
			$classes[] = 'custom-background-empty';
		} elseif ( in_array( $background_color, array( 'fff', 'ffffff' ), true ) ) {
			$classes[] = 'custom-background-white';
		}
	}

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'glasierinc-fonts', 'queue' ) ) {
		$classes[] = 'custom-font-enabled';
	}

	if ( ! is_multi_author() ) {
		$classes[] = 'single-author';
	}

	return $classes;
}
add_filter( 'body_class', 'glasierinc_body_class' );

/**
 * Adjust content width in certain contexts.
 *
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since glasierinc 1.0
 */
function glasierinc_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'glasierinc_content_width' );

/**
 * Register postMessage support.
 *
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since glasierinc 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function glasierinc_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'            => '.site-title > a',
				'container_inclusive' => false,
				'render_callback'     => 'glasierinc_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'            => '.site-description',
				'container_inclusive' => false,
				'render_callback'     => 'glasierinc_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'glasierinc_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since glasierinc 2.0
 *
 * @see glasierinc_customize_register()
 *
 * @return void
 */
function glasierinc_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since glasierinc 2.0
 *
 * @see glasierinc_customize_register()
 *
 * @return void
 */
function glasierinc_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue JavaScript postMessage handlers for the Customizer.
 *
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since glasierinc 1.0
 */
function glasierinc_customize_preview_js() {
	wp_enqueue_script( 'glasierinc-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20141120', true );
}
add_action( 'customize_preview_init', 'glasierinc_customize_preview_js' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since glasierinc 2.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function glasierinc_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'glasierinc_widget_tag_cloud_args' );

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backward compatibility to support pre-5.2.0 WordPress versions.
	 *
	 * @since glasierinc 3.0
	 */
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since glasierinc 3.0
		 */
		do_action( 'wp_body_open' );
	}
endif;



add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

	if (function_exists('acf_add_options_page')) {
		// Theme General Settings
		$general_settings   = array(
			'page_title' 	=> __('Theme General Settings', 'glasierinc'),
			'menu_title'	=> __('Theme Settings', 'glasierinc'),
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'	=> true
		);
		acf_add_options_page($general_settings);

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'Theme Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Theme Footer',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Lending Page Header',
			'menu_title'	=> 'Lending Page Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Lending Page Footer',
			'menu_title'	=> 'Lending Page Footer',
			'parent_slug'	=> 'theme-general-settings',
		));


		$slider   = array(
			'page_title' 	=> __('Sliders Settings', 'glasierinc'),
			'menu_title'	=> __('Sliders', 'glasierinc'),
			'menu_slug' 	=> 'sliders-settings',
			'capability'	=> 'edit_posts',
			'icon_url' => 'dashicons-images-alt2',
			'position' => 4,
			'redirect'	=> true
		);
		acf_add_options_page($slider);
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Slider',
			'menu_title'	=> 'Slider',
			'parent_slug'	=> 'sliders-settings',
		));


		$industries   = array(
			'page_title' 	=> __('Industries Settings', 'glasierinc'),
			'menu_title'	=> __('Industries', 'glasierinc'),
			'menu_slug' 	=> 'industries-settings',
			'capability'	=> 'edit_posts',
			'icon_url' => 'dashicons-image-filter',
			'position' => 8,
			'redirect'	=> true
		);
		acf_add_options_page($industries);
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Industry',
			'menu_title'	=> 'Industry',
			'parent_slug'	=> 'industries-settings',
		));

		$cta   = array(
			'page_title' 	=> __('Call To Action Settings', 'glasierinc'),
			'menu_title'	=> __('Call To Action', 'glasierinc'),
			'menu_slug' 	=> 'cta-settings',
			'capability'	=> 'edit_posts',
			'icon_url' => 'dashicons-format-status',
			'position' => 9,
			'redirect'	=> true
		);
		acf_add_options_page($cta);
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Call To Action',
			'menu_title'	=> 'Call To Action',
			'parent_slug'	=> 'cta-settings',
		));


		$location   = array(
			'page_title' 	=> __('Contact Locations Settings', 'glasierinc'),
			'menu_title'	=> __('Contact Locations', 'glasierinc'),
			'menu_slug' 	=> 'location-settings',
			'capability'	=> 'edit_posts',
			'icon_url' => 'dashicons-location-alt',
			'position' => 9,
			'redirect'	=> true
		);
		acf_add_options_page($location);
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Contact Locations',
			'menu_title'	=> 'Contact Locations',
			'parent_slug'	=> 'location-settings',
		));
	}

}





function dequeue_my_css() {
  wp_dequeue_style('glasierinc-style');
  wp_deregister_style('glasierinc-style');

  wp_dequeue_style('wp-block-library');
  wp_deregister_style('wp-block-library');
}
add_action('wp_enqueue_scripts','dequeue_my_css');


add_filter( 'wp_enqueue_scripts', 'change_default_jquery', 1 );

function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');

    wp_dequeue_script( 'jquery-core');
    wp_deregister_script( 'jquery-core');

}



function myscript_css() {
  if(!is_page('1654')){
	  wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'all');
	  wp_enqueue_style( 'plugin-min', get_template_directory_uri() . '/css/plugin.min.css', array(), 'all');
	  // wp_enqueue_style( 'all-min', get_template_directory_uri() . '/css/all.min.css', array(), 'all');
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), 'all');
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), 'all');
	  wp_enqueue_style( 'fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
	  wp_enqueue_style( 'fontsPoppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap');
	}
}
add_action( 'wp_head' , 'myscript_css', 1 );





function foot_theme_scripts() {
	if(!is_page('1654')){
	  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-3.5.0.min.js', array(), true);
	  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), true);
	  wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), true);
	  wp_enqueue_script( 'app-bundle', get_template_directory_uri() . '/js/app.bundle.js', array(), true);
	  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), true);
	}
 }

add_action( 'wp_footer', 'foot_theme_scripts' );


require get_template_directory() . '/better-comments.php';


function glasierinc_pagination(){

	$allowed_tags = [
		'span' => [
			'class' => []
		],
		'a' => [
			'class' => [],
			'href' => [],
		],
		'li' => []
	];

	$args = [
		'type'=>'list',
		'before_page_number' => '<span class="paginate-btn">',
		'after_page_number' => '</span>',
		'prev_text'    => __('Prev'),
    'next_text'    => __('Next'),
    'prev_next'    => __('Next'),
	];
	printf('<ul class="pagination shadows">%s</ul>', wp_kses( paginate_links($args), $allowed_tags ) );
}



// // Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


/* Function which displays your post date in time ago format */
function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}

function na_remove_slug( $post_link, $post, $leavename ) {
    if ( 'services' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );



function na_parse_request( $query ) {
    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'services', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );


// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function getCountry(){
	$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']) );
	$country = $geoPlugin_array['geoplugin_countryName'];
	return $country;
}

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to Blogs
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Blogs';
        $labels->singular_name = 'Blogs';
        $labels->add_new = 'Add Blogs';
        $labels->add_new_item = 'Add Blogs';
        $labels->edit_item = 'Edit Blogs';
        $labels->new_item = 'Blogs';
        $labels->view_item = 'View Blogs';
        $labels->search_items = 'Search Blogs';
        $labels->not_found = 'No Blogs found';
        $labels->not_found_in_trash = 'No Blogs found in Trash';
        $labels->all_items = 'All Blogs';
        $labels->menu_name = 'Blogs';
        $labels->name_admin_bar = 'Blogs';
}


function custom_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );



// add a new logo to the login page
function wptutsplus_login_logo() { ?>
    <style type="text/css">
        .login #login h1 a {
            background-image: url( <?=site_url();?>/wp-content/uploads/2022/03/logo.png );
            background-size: 200px auto;
						height: 50px;
						width: 100%;
						margin-bottom: 10px;
			  }
        .login #nav a, .login #backtoblog a {
            color: #005186 !important;
        }
        .login #nav a:hover, .login #backtoblog a:hover {
            color: #005186 !important;
        }
				.login #login_error, .login .message, .login .success {
					margin-bottom: 10px;
				}
				.login form {
					margin-top: 10px;
				}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wptutsplus_login_logo' );



// CF7
add_action('wpcf7_init', 'custom_add_shortcode_lptitle');

function custom_add_shortcode_lptitle() {
    wpcf7_add_shortcode('selectjob', 'custom_lptitle_shortcode_handler'); // "lptitle" is the type of the form-tag
}

function custom_lptitle_shortcode_handler($tag) {
    global $post;
     $argss = array(
       'post_type' => 'career',
       'order' => 'DESC',
       'posts_per_page' => -1,
      );
     // $name = [];
     $careerr_query = new WP_Query($argss);
      if ($careerr_query->have_posts()) : 

      $select = '<select id="select_job" name="select_job" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">';
      // $select .= '<option value="">Select Job Title</option>';
      	while ($careerr_query->have_posts()) : $careerr_query->the_post();
				$select .= '<option value="'.get_the_title().'">'.get_the_title().'</option>';
      	 	endwhile; 
      	$select .= '</select>';
      	wp_reset_postdata();
      endif;
    return $select;
}




add_action( 'wp_footer', 'mycustom_wp_footer' );
function mycustom_wp_footer() {
?>
	<script type="text/javascript">
		document.addEventListener( 'wpcf7submit', function( event ) {
			$('.wpcf7-response-output').html(event.detail.apiResponse.message);
			$('label').attr("file-name", "");
		}, false );
	</script>
<?php }


function add_btn_menu($items, $args) {
   $menu = wp_get_nav_menu_object($args->menu);
    if( $args->theme_location == 'lending_menu' ){
    	$header_button = get_field('header_button', 'option');
    	if($header_button){
    	$items .= '<li class="button">'
            . '<a class="btn btn-default main-bg-color text-uppercase smooth" href="'.$header_button['url'].'" data-scroll-nav="1">'.$header_button['title'].'</a>'
            . '</li>';
      }
    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_btn_menu', 10, 2);




function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  if (property_exists($args, 'data_scroll_nav')) {
    $atts['data-scroll-nav'] = $atts['rel'];
  }
  
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
