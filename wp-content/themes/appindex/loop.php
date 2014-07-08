<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="article-wrap">

			<h4><?php echo get_post_meta($post->ID, 'dbt_subheader', true); ?></h4>
			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post details -->
			<h6><strong>Updated</strong> <?php the_time('F j, Y'); ?></h6> |
			<h6>
				<strong>Filed Under</strong>
			</h6>
			<span class="tags"><?php the_tags(''); ?></span>
			<!-- /post details -->
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="not-found">
		<img src="/appindex/wp-content/themes/appindex/img/we-searched-everywhere@2x.gif">
		<h5>Oddly enough, we mostly found cats. Cats.</h5>
	</article>
	<!-- /article -->

<?php endif; ?>
