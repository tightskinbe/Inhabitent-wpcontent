



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a class="link-wrapper" href="<?php echo get_post_permalink(); ?>">
		<div class="group-products">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		</div>
		</a>
		<div class="product-meta">
            <h2><?php the_title(); ?></h2>
            <p>$<?php the_field('price'); ?></p>
    
        </div><!-- .product-meta -->
	</header><!-- .entry-header -->


</article><!-- #post-## -->