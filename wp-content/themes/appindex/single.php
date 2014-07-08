<?php #get_header(); ?>
<?php require('header_post.php');?>

	<main role="main">
	<!-- section -->
	<section class="review-page">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if( is_user_logged_in() ) { ?>
          <div class="edit-wrap">
            <h6>Hey Hey You You Do You Need to</h6>
            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
            <h6>?</h6>
          </div>
        <?php } ?>

			<div class="review-header-wrap">
				<div class="freshness">
					<h6><span class="date"><?php the_time('F j, Y'); ?></span></h6>
				</div>
				<!-- post title -->
					<h4><?php echo get_post_meta($post->ID, 'dbt_subheader', true); ?></h4>
					<h1>
					<?php the_title(); ?>
					</h1>
					<!-- /post title -->
					<!-- post thumbnail -->
					<div class="featured-image">
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->
						</div>

					<h2><?php echo get_post_meta($post->ID, 'dbt_appname', true); ?></h2>

				</div>
				<!-- Download Links -->
				<div class="download-wrap">
					<div class="download">
						<h5>Download it:</h5>
						<?php if (get_post_meta($post->ID, 'dbt_applelink', true) && get_post_meta($post->ID, 'dbt_applelink', true) != "") { ?>
				        <a class="download-link" href="<?php echo get_post_meta($post->ID, 'dbt_applelink', true); ?>">
				        	<div class="download-icon apple-icon"></div>
				        	<h6>App Store</h6>
				        </a>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'dbt_androidlink', true) && get_post_meta($post->ID, 'dbt_androidlink', true) != "") { ?>
			        <a class="download-link" href="<?php echo get_post_meta($post->ID, 'dbt_androidlink', true); ?>">
			        	<div class="download-icon android-icon"></div>
			        	<h6>Google Play</h6>
			        </a>
						<?php } ?>
					</div>
				</div>

					<!-- /post details -->
					<div class="five-second-wrap">
						<div class="five-second">
							<h6>The Five Second Reason You'll Love It</h6>
							<h1>"<?php echo get_post_meta($post->ID, 'dbt_fiveseconds', true); ?>"</h1>
						</div>
					</div>

						<div class="review-page-content-wrap">
							<div class="review-page-content">
								<?php the_content(); // Dynamic Content ?>
							</div>
						</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
