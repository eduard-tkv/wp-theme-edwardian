<?php
/**
 * Template Name: Edwardian
 *
 * @package WordPress
 * @subpackage Edwardian
 * @since Edwardian 1.0
 */

get_header(); ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //post_class(); ?>
					
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						
							<?php //the_post_thumbnail(); ?>
						
						<?php endif; ?>

						<?php // the_title(); ?>
					
						<?php the_content(); ?>


			<?php endwhile; ?>

<?php get_footer(); ?>