<?php
/**
 * WP Bootstrap Mega Navwalker
 *
 * @package WP-Bootstrap-Mega-Navwalker
 */

/*
 * Class Name: WP_Bootstrap_Mega_Navwalker
 * Plugin Name: WP Bootstrap Mega Navwalker
 * Plugin URI:  https://github.com/wp-bootstrap/WP-Bootstrap-MegaMenu-Navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 4 navigation style in a custom theme using the WordPress built in menu manager.
 * Author: WP Bootstrap Team, @jaycbrf4
 * Version: 1.0.0
 * Author URI: https://github.com/wp-bootstrap
 * GitHub Plugin URI: https://github.com/wp-bootstrap/WP-Bootstrap-MegaMenu-Navwalker
 * GitHub Branch: master
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
*/

if ( ! class_exists( 'WP_Bootstrap_Mega_Navwalker' ) ) {
	/**
	 * WP_Bootstrap_Mega_Navwalker class.
	 *
	 * @extends Walker_Nav_Menu
	 */
	// class WP_Bootstrap_Mega_Navwalker extends Walker_Nav_Menu {


	// 	/**
	// 	 * Start Level.
	// 	 *
	// 	 * @access public
	// 	 * @param mixed &$output Output.
	// 	 * @param int   $depth (default: 0) Depth.
	// 	 * @param array $args (default: array()) Arguments.
	// 	 * @return void
	// 	 */
	// 	public function start_lvl( &$output, $depth = 0, $args = array() ) {
	// 		$indent  = str_repeat( "\t", $depth );
	// 		$submenu = ( $depth > 0 ) ? ' sub-menu' : '';
	// 		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	// 	}


	// 	/**
	// 	 * Start El.
	// 	 *
	// 	 * @access public
	// 	 * @param mixed &$output Output.
	// 	 * @param mixed $item Item.
	// 	 * @param int   $depth (default: 0) Depth.
	// 	 * @param array $args (default: array()) Arguments.
	// 	 * @param int   $id (default: 0) ID.
	// 	 * @return void
	// 	 */
	// 	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	// 		$indent        = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	// 		$li_attributes = '';
	// 		$class_names   = $value = '';
	// 		$has_mega_menu = is_active_sidebar( 'mega-menu-item-' . $item->ID );

	// 		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

	// 		// managing divider: add divider class to an element to get a divider before it.
	// 		$divider_class_position = array_search( 'divider', $classes, true );

	// 		if ( false !== $divider_class_position ) {
	// 			$output .= "<li class=\"divider\"></li>\n";
	// 			unset( $classes[ $divider_class_position ] );
	// 		}

	// 		$classes[] = ( $args->has_children || $has_mega_menu ) ? 'dropdown' : '';
	// 		$classes[] = ( $item->current || $item->current_item_ancestor ) ? 'active' : '';
	// 		$classes[] = 'nav-item-' . $item->ID;

	// 		if ( $depth && $args->has_children ) {
	// 			$classes[] = 'dropdown-submenu';
	// 		}

	// 		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	// 		$class_names = ' class="nav-item ' . esc_attr( $class_names ) . '"';

	// 		$id = apply_filters( 'nav_menu_item_id', 'nav-item-' . $item->ID, $item, $args );
	// 		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

	// 		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

	// 		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
	// 		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
	// 		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
	// 		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
	// 		$attributes .= ( $args->has_children || $has_mega_menu ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

	// 		$item_output  = $args->before;
	// 		$item_output .= '<a' . $attributes . '>';
	// 		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	// 		$item_output .= ( ( 0 === $depth || 1 ) && ( $args->has_children || $has_mega_menu ) ) ? ' <b class="caret"></b></a>' : '</a>';
	// 		$item_output .= $args->after;

	// 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	// 		if ( $has_mega_menu ) {
	// 			$output .= "<ul id=\"mega-menu-{$item->ID}\" class=\"mega-menu-wrapper dropdown-menu depth_" . $depth . '">';
	// 			ob_start();
	// 			dynamic_sidebar( 'mega-menu-item-' . $item->ID );
	// 			$dynamic_sidebar = ob_get_contents();
	// 			ob_end_clean();
	// 			$output .= $dynamic_sidebar;
	// 			$output .= '</ul>';
	// 		}
	// 	}


	// 	/**
	// 	 * Display Element.
	// 	 *
	// 	 * @access public
	// 	 * @param mixed $element Element.
	// 	 * @param mixed &$children_elements Children Elements.
	// 	 * @param mixed $max_depth Max Depth.
	// 	 * @param int   $depth (default: 0) Depth.
	// 	 * @param mixed $args Arguments.
	// 	 * @param mixed &$output Output.
	// 	 */
	// 	public function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {

	// 		if ( ! $element ) {
	// 			return;
	// 		}

	// 		$id_field = $this->db_fields['id'];

	// 		// Display this element.
	// 		if ( is_array( $args[0] ) ) {
	// 			$args[0]['has_children'] = ! empty( $children_elements[ $element->$id_field ] );
	// 		} elseif ( is_object( $args[0] ) ) {
	// 			$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
	// 		}
	// 		$cb_args = array_merge( array( &$output, $element, $depth ), $args );
	// 		call_user_func_array( array( &$this, 'start_el' ), $cb_args );

	// 		$id = $element->$id_field;

	// 		// Descend only when the depth is right and there are childrens for this element.
	// 		if ( ( 0 === $max_depth || $max_depth > $depth + 1 ) && isset( $children_elements[ $id ] ) ) {
	// 			foreach ( $children_elements[ $id ] as $child ) {
	// 				if ( ! isset( $newlevel ) ) {
	// 					$newlevel = true;
	// 					// Start the child delimiter.
	// 					$cb_args = array_merge( array( &$output, $depth ), $args );
	// 					call_user_func_array( array( &$this, 'start_lvl' ), $cb_args );
	// 				}

	// 				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
	// 			}

	// 			unset( $children_elements[ $id ] );
	// 		}

	// 		if ( isset( $newlevel ) && $newlevel ) {
	// 			// End the child delimiter.
	// 			$cb_args = array_merge( array( &$output, $depth ), $args );
	// 			call_user_func_array( array( &$this, 'end_lvl' ), $cb_args );
	// 		}

	// 		// End this element.
	// 		$cb_args = array_merge( array( &$output, $element, $depth ), $args );
	// 		call_user_func_array( array( &$this, 'end_el' ), $cb_args );
	// 	}
	// }

	class WP_Bootstrap_Mega_Navwalker extends Walker_Nav_Menu {

    /**
     * Unique id for dropdowns
     */
    public $submenu_unique_id = '';

    /**
     * Starts the list before the elements are added.
     * @see Walker::start_lvl()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        $before_start_lvl = '<div class="menu-dropdown">';

        if($depth==0){
            $output .= "{$n}{$indent}{$before_start_lvl}<ul id=\"$this->submenu_unique_id\" class=\"container megamenu-background sub-menu dropdown-content\">{$n}";
        }
        else{
            $output .= "{$n}{$indent}<ul id=\"$this->submenu_unique_id\" class=\"sub-menu dropdown-content\">{$n}";
        }

    }

    /**
     * Ends the list of after the elements are added.
     * @see Walker::end_lvl()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );
        $after_end_lvl = '</div>';

        if($depth==0){
            $output .= "$indent</ul>{$after_end_lvl}{$n}";
        }
        else{
            $output .= "$indent</ul>{$n}";
        }

    }

    /**
     * @see Walker::start_el()
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // set active class for current nav menu item
        if( $item->current == 1 ) {
            $classes[] = 'active';
        }

        // set active class for current nav menu item parent
        if( in_array( 'current-menu-parent' ,  $classes ) ) {
            $classes[] = 'active';
        }

        /**
         * Filters the arguments for a single nav menu item.
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        // add a divider in dropdown menus
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li class="divider">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li class="divider">';
        } else {
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );

            //adding col-md-3 class to column
            if( in_array('menu-item-has-children', $classes ) ) {
                if( $depth === 1 ) {                    
                    $class_names = $class_names ? ' class="col-md-3 mega-menucolumn '.esc_attr( $class_names ) . '"' : '';
                } else {
                    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
                }
            }else{
                $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
            }

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $class_names .'>';

            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

            if( in_array('menu-item-has-children', $classes ) ) {
                $atts['href']   = ' ';
                $this->submenu_unique_id = 'dropdown-'.$item->ID;
            } else {
                $atts['href']   = ! empty( $item->url ) ? $item->url  : '';
                $atts['class'] = '';
            }

            $atts['class'] .= 'menu-item-link-class ';

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            if( ! in_array( 'icon-only' , $classes ) ) {

                $title = apply_filters( 'the_title', $item->title, $item->ID );

                $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
            }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';

            // set icon on left side
            if( !empty( $classes ) ) {
                foreach ($classes as $class_name) {
                    if( strpos( $class_name , 'fa' ) !== FALSE ) {
                        $icon_name = explode( '-' , $class_name );
                        if( isset( $icon_name[1] ) && !empty( $icon_name[1] ) ) {
                            $item_output .= '<i class="fa fa-'.$icon_name[1].'" aria-hidden="true"></i> ';
                        }
                    }
                }
            }

            $item_output .= $args->link_before . $title . $args->link_after;

            if( in_array('menu-item-has-children', $classes) ){
                if( $depth == 0 ) {
                    $item_output .= ' <i class="fa fa-bolt" aria-hidden="true"></i>';
                }
            }

            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
     * Ends the element output, if needed.
     *
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
    }

} //
}

