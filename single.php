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

          <div class="content-youtube">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?  
            $txt = get_field('youtubeurl');
            if($txt){ ?><? echo $txt; ?>
            <? } ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="content-box-wrap">
            <p class="single-who-title">フィードバック者：
              <?  
              $txt = get_field('whofeedback');
              if($txt){ ?><? echo $txt; ?>
              <? } ?>
            </p>
            <h3 class="single-fb-title">Feed Back:</h3>
            <!-- ループ開始 -->
            <?php
            $group_set = SCF::get( 'feedbackbox' );
            foreach ( $group_set as $field_name => $field_value ) {
              ?>
              <div class="single-content-box">
                <h4><?php echo esc_html( $field_value['fbplayer'] ); ?></h4>
                <p><?php echo nl2br($field_value['fbtext']); ?></p>
              </div>
              <?php } ?>
            </div>


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

 <div class="player-box-wrapper">
    <div class="player-box">
      <h3>Member</h3>
      <div class="player-item">
        <?php
        $terms = get_terms('player');
        foreach ( $terms as $term ) {
          echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
        }
        ?>
      </div>
    </div>
  </div>

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
