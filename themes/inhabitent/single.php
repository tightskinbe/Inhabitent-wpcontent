\<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php the_title(); ?></h1>
				</header>
			<?php endif; ?>
				<div class="flex-journals">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?> 
			<!-- temp part here............................................... -->

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
		<?php the_title( '<h1 class="entry-title single-journal">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<!-- end of temp part................................................. -->
				<div class="single-journal-links">
				<p>Posted in &#8594; <a href="">contests</a></p>
				<p>Tagged &#8594;<a href="">photography</a>,<a href="">Vans</a></p>
				</div>
				<div class="single-journal-buttons">
					<a href=""><i class="fab fa-facebook-f"></i> LIKE</a>
					<a href=""><i class="fab fa-twitter"></i> TWEET</a>
					<a href=""> <i class="fab fa-pinterest"></i> PIN</a>
				</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div> 
		<!-- flex j -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
