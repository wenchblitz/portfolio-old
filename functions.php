<?php

/*
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since Twenty Ten 1.0
 * @return int
 */
function twentyten_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyten_excerpt_length' );


/**
 * Returns a "Continue Reading" link for excerpts
 *
 * @since Twenty Ten 1.0
 * @return string "Continue Reading" link
 */
function twentyten_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyten_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string An ellipsis
 */
function twentyten_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyten_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function twentyten_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= twentyten_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 *
 * Galleries are styled by the theme in Twenty Ten's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 *
 * @since Twenty Ten 1.2
 */
add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Deprecated way to remove inline styles printed when the gallery shortcode is used.
 *
 * This function is no longer needed or used. Use the use_default_gallery_style
 * filter instead, as seen above.
 *
 * @since Twenty Ten 1.0
 * @deprecated Deprecated in Twenty Ten 1.2 for WordPress 3.1
 *
 * @return string The gallery style filter, with the styles themselves removed.
 */
function twentyten_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
// Backwards compatibility with WordPress 3.0.
if ( version_compare( $GLOBALS['wp_version'], '3.1', '<' ) )
	add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using Twenty Ten 1.2 in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default Twenty Ten styling.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

if ( ! function_exists( 'twentyten_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_on() {
		 printf( __( '<span>Posted on</span> %2$s', 'twentyten' ),
		 'meta-prep',
		 sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span>%3$s</span></a>',
		 get_permalink(),
		 esc_attr( get_the_time() ),
		 get_the_date()
		 )
	 );
	
	/**
			printf( __('<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
			'meta-prep meta-prep-author',
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
				get_permalink(),
				esc_attr( get_the_time() ),
				get_the_date()
			),
			sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
				get_author_posts_url( get_the_author_meta( 'ID' ) ),
				sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
				get_the_author()
			)
		);
	**/
}
endif;

if ( ! function_exists( 'twentyten_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

/*********/

function remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

/** add menu **/
// Create a function for register_nav_menus()
function add_wp3menu_support() {
 
register_nav_menus(
        array(
        'main-menu' => __('Main Navigation'),
        'another-menu' => __('Another Navigation')
        )
     );
 
}
 
//Add the above function to init hook.
add_action('init', 'add_wp3menu_support');

// LOAD BX SLIDER
// *********************************************************
function loadbxslider()
{
    wp_enqueue_style('bxstyle', '/wp-content/themes/wenchblitz/bx_styles.css');
    wp_enqueue_script('bxscript', '/wp-content/themes/wenchblitz/scripts/jquery.bxSlider.min.js', array('jquery'));
}
add_action('init', 'loadbxslider');

//Excluding Pages From Search Results
//**********************************
function mySearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','mySearchFilter');


//ADDING NEW AVATAR
//*******************************************
add_filter( 'avatar_defaults', 'newgravatar' );  
  
function newgravatar ($avatar_defaults) {  
    $myavatar = get_bloginfo('template_directory') . '/images/wenchblitz-no-avatar.jpg';  
    $avatar_defaults[$myavatar] = "wenchblitz Gravatar";  
    return $avatar_defaults;  
} 

//DYNAMIC SIDEBAR
//*******************************************
if ( function_exists('register_sidebar') )
    register_sidebar();
	
//BREADCRUMPS
//*******************************************
function dimox_breadcrumbs() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  global $post;
  $homeLink = get_bloginfo('url');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
} // end dimox_breadcrumbs()	

//POST THUMBNAILS
//***************************
if ( function_exists( 'add_theme_support' ) )
add_theme_support('post-thumbnails');

// Wordpress Blog Users
//*******************************************
function fb_list_authors($userlevel = 'all', $show_fullname = true) {
	global $wpdb;
/*
 all = Display all user
 1 = subscriber
 2 = editor
 3 = author
 7 = publisher
10 = administrator
*/
if ( $userlevel == 'all' ) {
	$author_subscriper = $wpdb->get_results("SELECT * from $wpdb->usermeta WHERE meta_key = 'wp_capabilities' AND meta_value = 'a:1:{s:10:\"subscriber\";b:1;}'");
	foreach ( (array) $author_subscriper as $author ) {
		$author    = get_userdata( $author->user_id );
		$userlevel = $author->wp2_user_level;
		$name      = $author->nickname;
		if ( $show_fullname && ($author->first_name != '' && $author->last_name != '') ) {
			$name = "$author->first_name $author->last_name";
		}
		$link = '<li>' . $name . '</li>';
		echo $link;
	}
	$i = 0;
	while ( $i <= 10 ) {
		$userlevel = $i;
		$authors = $wpdb->get_results("SELECT * from $wpdb->usermeta WHERE meta_key = 'wp_user_level' AND meta_value = '$userlevel'");
		foreach ( (array) $authors as $author ) {
			$author    = get_userdata( $author->user_id );
			$userlevel = $author->wp2_user_level;
			$name      = $author->nickname;
			if ( $show_fullname && ($author->first_name != '' && $author->last_name != '') ) {
				$name = "$author->first_name $author->last_name";
			}
			$link = '<li>' . $name . '</li>';
			echo $link;
		}
		$i++;
	}
} else {
	if ($userlevel == 1) {
		$authors = $wpdb->get_results("SELECT * from $wpdb->usermeta WHERE meta_key = 'wp_capabilities' AND meta_value = 'a:1:{s:10:\"subscriber\";b:1;}'");
	} else {
		$authors = $wpdb->get_results("SELECT * from $wpdb->usermeta WHERE meta_value = '$userlevel'");
	}
	foreach ( (array) $authors as $author ) {
		$author = get_userdata( $author->user_id );
		$userlevel = $author->wp2_user_level;
		$name = $author->nickname;
		if ( $show_fullname && ($author->first_name != '' && $author->last_name != '') ) {
			$name = "$author->first_name $author->last_name";
		}
		$link  = '<li><b>' . $userlevelname[$userlevel] . '</b></li>';
		$link .= '<li>' . $name . '</li>';
		echo $link;
	}
}
}

//WP LINK PAGES
/**
 * The formatted output of a list of pages.
 *
 * Displays page links for paginated posts (i.e. includes the "nextpage".
 * Quicktag one or more times). This tag must be within The Loop.
 *
 * The defaults for overwriting are:
 * 'next_or_number' - Default is 'number' (string). Indicates whether page
 *      numbers should be used. Valid values are number and next.
 * 'nextpagelink' - Default is 'Next Page' (string). Text for link to next page.
 *      of the bookmark.
 * 'previouspagelink' - Default is 'Previous Page' (string). Text for link to
 *      previous page, if available.
 * 'pagelink' - Default is '%' (String).Format string for page numbers. The % in
 *      the parameter string will be replaced with the page number, so Page %
 *      generates "Page 1", "Page 2", etc. Defaults to %, just the page number.
 * 'before' - Default is '<p id="post-pagination"> Pages:' (string). The html 
 *      or text to prepend to each bookmarks.
 * 'after' - Default is '</p>' (string). The html or text to append to each
 *      bookmarks.
 * 'text_before' - Default is '' (string). The text to prepend to each Pages link
 *      inside the <a> tag. Also prepended to the current item, which is not linked.
 * 'text_after' - Default is '' (string). The text to append to each Pages link
 *      inside the <a> tag. Also appended to the current item, which is not linked.
 *
 * @param string|array $args Optional. Overwrite the defaults.
 * @return string Formatted output in HTML.
 */
function custom_wp_link_pages( $args = '' ) {
	$defaults = array(
		'before' => '<p id="post-pagination">' . __( '<strong>Pages:</strong>' ), 
		'after' => '</p>',
		'text_before' => '',
		'text_after' => '',
		'next_or_number' => 'number', 
		'nextpagelink' => __( 'Next page' ),
		'previouspagelink' => __( 'Previous page' ),
		'pagelink' => '%',
		'echo' => 1
	);
 
	$r = wp_parse_args( $args, $defaults );
	$r = apply_filters( 'wp_link_pages_args', $r );
	extract( $r, EXTR_SKIP );
 
	global $page, $numpages, $multipage, $more, $pagenow;
 
	$output = '';
	if ( $multipage ) {
		if ( 'number' == $next_or_number ) {
			$output .= $before;
			for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
				$j = str_replace( '%', $i, $pagelink );
				$output .= ' ';
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= _wp_link_page( $i );
				else
					$output .= '<span class="current-post-page">';
 
				$output .= $text_before . $j . $text_after;
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '</a>';
				else
					$output .= '</span>';
			}
			$output .= $after;
		} else {
			if ( $more ) {
				$output .= $before;
				$i = $page - 1;
				if ( $i && $more ) {
					$output .= _wp_link_page( $i );
					$output .= $text_before . $previouspagelink . $text_after . '</a>';
				}
				$i = $page + 1;
				if ( $i <= $numpages && $more ) {
					$output .= _wp_link_page( $i );
					$output .= $text_before . $nextpagelink . $text_after . '</a>';
				}
				$output .= $after;
			}
		}
	}
 
	if ( $echo )
		echo $output;
 
	return $output;
}

//Advance Comment System
function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>

		<?php if (1==$comment->user_id) { ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <div class="the-avatar"><?php echo get_avatar( $comment, 60 ); ?></div>
                        
                        <div class="the-comment">                     
                            <div class="comment-meta commentmetadata">
                            	<strong><?php comment_author_link() ?></strong>&nbsp;<?php _e('says: '); ?><?php edit_comment_link('[Edit]','',''); ?> 
                            </div>
                            
							<?php comment_text() ?> 
                            
                            <?php if($args['max_depth']!=$depth) { ?>		
                                <div class="reply">
                                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                                </div>
                       		<?php } ?>                           
                    	</div><!--.the-comment-->
                     <div class="timestamp right"><a href="#comment-<?php comment_ID() ?>" title=""><time><?php comment_date('l - F j, Y') ?><?php _e(' at '); ?><?php comment_time('h:i A') ?></time></a></div>
                    </div><!--.comment-author-->
                </div><!--div#comment-->
                
		<?php } else { ?>

            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-user vcard">
                        <div class="the-avatar"><?php echo get_avatar( $comment, 60 ); ?></div>
                        
                        <div class="the-comment">                     
                            <div class="comment-meta commentmetadata">
                                <strong><?php comment_author_link() ?></strong>&nbsp;<?php _e('says: '); ?><?php edit_comment_link('[Edit]','',''); ?>               
                                <?php if ($comment->comment_approved == '0') : ?>
                                <em><?php _e('<span class="moderation">Your comment is awaiting moderation.</span>'); ?></em>
                                <?php endif; ?>
                            </div>
                            
							<?php comment_text() ?> 
                            
                            <?php if($args['max_depth']!=$depth) { ?>		
                                <div class="reply">
                                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                                </div>
                        	<?php } ?>                          
                    	</div><!--.the-comment-->
					<div class="timestamp right"><a href="#comment-<?php comment_ID() ?>" title=""><time><?php comment_date('l - F j, Y') ?><?php _e(' at '); ?><?php comment_time('h:i A') ?></time></a></div>
                	</div><!--.comment-user-->
               	</div><!--div#comment-->                
		<?php } ?>               
<?php } ?>