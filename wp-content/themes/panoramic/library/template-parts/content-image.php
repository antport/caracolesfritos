<?php
/**
 * @package Panoramic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
    	<?php
		the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<figure class="entry-attachment wp-block-image">
		<?php
			/**
			 * Filter the default panoramic image attachment size.
			 *
			 * @param string $image_size Image size. Default 'large'.
			 */
			$image_size = apply_filters( 'panoramic_attachment_size', 'full' );

			echo wp_get_attachment_image( get_the_ID(), $image_size );
		?>

			<figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>

		</figure><!-- .entry-attachment -->

		<?php
		the_content();
		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'panoramic' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'panoramic' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	<?php
		// Retrieve attachment metadata.
		$metadata = wp_get_attachment_metadata();
	if ( $metadata ) {
		printf(
			'<span class="full-size-link"><span class="screen-reader-text">%1$s</span><a href="%2$s">%3$s &times; %4$s</a></span>',
			_x( 'Full size', 'Used before full size attachment link.', 'panoramic' ),
			esc_url( wp_get_attachment_url() ),
			absint( $metadata['width'] ),
			absint( $metadata['height'] )
		);
	}
	?>

		<?php panoramic_entry_footer(); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
