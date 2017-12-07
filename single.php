<?php
/**
 * The template for displaying all single posts.
 *
 * @package anissa
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-cat">
          &mdash; <?php the_category( ', ' ) ?> &mdash;
        </div><!-- .entry-cat -->
        <header class="entry-header">
          <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
          <div class="entry-datetop">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
          </div><!-- .entry-datetop -->


          <p>ここにコンテンツ</p>
          

        </header><!-- .entry-header -->

        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div><!-- .entry-excerpt -->

      </article><!-- #post-## -->

      <?php
				// If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
       comments_template();
     endif;
     ?>
     <?php the_post_navigation( array( 'next_text' => __( '<span class="meta-nav">Next Post</span> %title', 'anissa' ), 'prev_text' => __( '<span class="meta-nav">Previous Post</span> %title', 'anissa' ) ) ); ?>
   <?php endwhile; // End of the loop. ?>
 </main>
 <!-- #main --> 
</div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
