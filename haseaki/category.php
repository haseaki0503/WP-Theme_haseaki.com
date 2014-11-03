<?php get_header(); ?>
<!-- Script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/link.js"></script>

<!-- Content -->
<div class="Wrap">
	<article>
		<h2><?php wp_title() ?></h2>
			<div class="posts">
					<?php if (have_posts()) : query_posts($query_string.'&posts_per_page=5');
					while (have_posts()) : the_post(); ?>
						<div class="post">
							<div class="post-head">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="meta">
									<span><?php the_date() ?></span>
									<span><?php the_category(', ') ?></span>
								</div><!-- /.meta -->
							</div><!-- /.post-head -->
							<?php the_excerpt(); ?>
							<div class="more">
								<span>続きを読む</span>
							</div><!-- /.more -->
						</div><!-- /.post -->
					<?php endwhile; ?>
					<?php else : ?>
						<div class="post">
						<h2>記事はありません</h2>
						<p>お探しの記事は見つかりませんでした。</p>
						</div><!-- /.post -->
					<?php endif; ?>

				</div><!-- /.posts -->
	</article>
</div><!-- /Wrap -->

<?php get_footer(); ?>