<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoschool
 */

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                    </header><!-- .entry-header -->
                    <div class="post-thumbnail">
					<?php autoschool_post_thumbnail(); ?>
                    </div>
                    <div class="entry-summary">
						<?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->


                </article><!-- #post-<?php the_ID(); ?> -->
            </div>
        </div>
</section>
