<?php require('header_post.php');?>

	<main role="main">
		<!-- section -->
		<section class="search-page-wrap">

			<h3 class="found"><?php echo sprintf( __( 'We searched through every box but we couldn\'t find ', '' ), $wp_query->found_posts ); echo get_search_query(); ?>.</h3>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
