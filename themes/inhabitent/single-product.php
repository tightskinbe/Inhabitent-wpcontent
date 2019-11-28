<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

					
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
			<div class="single-product-flex">
			<div>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				</div>
				


			<div class="entry-content ">
				<div class="single-content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p>$<?php the_field('price') ?></p>
				<?php the_content(); ?>
				<?php ?>
				<div class="single-media-links">
					<a href=""><i class="fab fa-facebook-f"></i> LIKE</a>
					<a href=""><i class="fab fa-twitter"></i> TWEET</a>
					<a href=""> <i class="fab fa-pinterest"></i> PIN</a>
				</div>
				</div>

				</header><!-- .entry-header -->
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			</div>

			<footer class="entry-footer">
				<?php red_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
