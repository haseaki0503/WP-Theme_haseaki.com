<?php get_header(); ?>

<header class="home">
	<h1><a class="logo" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
	<nav><?php wp_nav_menu(); ?></nav>
</header>

<!-- Script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/link.js"></script>

<!-- Content -->
<div class="Wrap">
	<article>
			<div class="posts">
					<?php if (have_posts()) : query_posts($query_string.'&posts_per_page=5');
					while (have_posts()) : the_post(); ?>
						<div class="post">
							<div class="post-head">
								<div class="meta">
									<span><?php the_date() ?></span>
								</div><!-- /.meta -->
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

					<div class="pager">
						<div class="pager-prev"><a href="#"><?php next_posts_link('古い記事へ »'); ?></a></div><!-- /.prev -->
						<div class="pager-next"><a href="#"><?php previous_posts_link('« 新しい記事へ'); ?></a></div><!-- /.next -->
					</div><!-- /.pager -->

				</div><!-- /.posts -->
	</article>
</div><!-- /Wrap -->

<?php get_footer(); ?>