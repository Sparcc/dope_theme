<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dope_theme
 */

get_header(); ?>
<div class="container-fluid">
<div class="row">
<?php
get_sidebar();?>
	<div id="primary" class="content-area col-lg-9 col-sm-12 col-xs-12">
		<main id="main" class="site-main front-page">
			THIS IS A DEFAULT PAGE TEMPLATE
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	


</div><!-- .row -->
</div><!-- .container -->
<?php	
get_footer();

