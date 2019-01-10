<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    	<div id="main">
        <!--START PUTTING CONTENT HERE-->
        	<div id="blogpost">
            
				<h1 class="page-title info-holder"><?php
					printf( __( '<strong>Category Archives:</strong> %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					//$category_description = category_description();
					//if ( ! empty( $category_description ) )
						//echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
                
			</div><!--#blogpost-->
      	<!--STOP PUTTING CONTENT HERE-->		
        </div><!--#main--> 
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
