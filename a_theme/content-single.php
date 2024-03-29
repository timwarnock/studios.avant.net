<?php
/**
 */

$formats = get_theme_support( 'post-formats' );
$format = get_post_format();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && 'image' == $format ) : ?>
		<div class="entry-image">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'kelly-featured-image' ); ?></a>
		</div>
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark">', '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_search() || is_archive() ) : 
		        the_excerpt();
		      else :
		        the_content();
		      endif;
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<div class="entry-meta">
			<?php kelly_posted_on(); ?>
		    <?php edit_post_link( __( 'edit' ), '<span class="edit-link">(', ')</span>' ); ?>
		</div><!-- .entry-meta -->

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
