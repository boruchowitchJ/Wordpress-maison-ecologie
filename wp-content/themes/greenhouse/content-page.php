<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Greenhouse
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content test" >
		<?php the_content(); ?>
      </div><!-- .entry-content --><div class="clear"></div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'greenhouse' ),
				'after'  => '</div>',
			) );
		?>
	
	<?php edit_post_link( __( 'Edit', 'greenhouse' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
