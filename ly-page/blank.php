<?php
/*
Template Name: blank
*/
get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">

<?php the_content(); ?>
<?php wp_link_pages( array(
							'before' => '<div class="page-links">' .
							esc_html__( 'Pages:', 'fall-by-mr-luo' ),
							'after'  => '</div>',
) ); ?>

</div><!-- .entry-content -->

</article><!-- #post-## -->

<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>