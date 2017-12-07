<?php
/**
 * Template part for displaying posts.
 *
 * @package anissa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<div class="entry-cat">
			&mdash; <?php the_category( ', ' ) ?> &mdash;
		</div><!-- .entry-cat -->
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<div class="entry-datetop">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
			</div><!-- .entry-datetop -->

			<div class="content-img-wrapper">
				<div class="content-img-wrapper">
					<img src="http://img.youtube.com/vi/<? $txt = get_field('youtubeurl'); if($txt){ ?><? echo $txt; ?><? } ?>/hqdefault.jpg">
				</div>
			</div>


			<?php if ( has_post_thumbnail() ) : ?>
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'anissa-home' ); ?></a>         
				</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-excerpt -->
	</a>
</article><!-- #post-## -->
