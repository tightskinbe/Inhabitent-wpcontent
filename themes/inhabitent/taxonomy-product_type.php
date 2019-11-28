<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Shop Stuff</h1>
					<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
				?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
				<a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a>   
				<?php endforeach; ?>
               </div>
            <?php endif; ?>
			</header><!-- .page-header -->

			<section class="products-grid">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'product' );
				?>

			<?php endwhile; ?>
			</section>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


