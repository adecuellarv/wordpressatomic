<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
            print_r(have_posts() ? 'simon' : 'nel');
			// Start the Loop.
			if ( have_posts() ) {
                print_r($post);
                //echo $post->post_content;
				//the_post();

				//get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/

			} // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
