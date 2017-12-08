<?php
/**
 * Template Name: Member-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="member-page-wrapper">
      <div class="member-page-top">
        <h2>メンバ一覧</h2>
      </div>
      <div class="member-page-content">
        
        <?php
        $terms = get_terms('player');
        foreach ( $terms as $term ) {
          echo '<p><a href="'.get_term_link($term).'">'.$term->name.'</a></p>';
        }
        ?>

      </div>
    </div>
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
