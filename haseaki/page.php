<?php get_header(); ?>

<header>
	<h1><a class="logo" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
	<nav><?php wp_nav_menu(); ?></nav>
</header>

<!-- Content -->
<div class="Wrap">
	<article>
			<div class="posts">

					<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<div class="post">
							<div class="post-head">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div><!-- /.post-head -->
							<?php the_content(); ?>
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