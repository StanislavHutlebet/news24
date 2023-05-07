<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<div class="mh-wrapper mh-home mh-clearfix">
	<div class="novini">
	<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Новини</span></h4>
<ul>

<?php get_articles_feed( 20, 11, '-1' ); ?> <!-- 16 -->

</ul>
	
	<a href="/category/novyny/">Переглянути всі новини</a>
	</div>
	<?php dynamic_sidebar('home-1'); ?>
	<?php if (is_active_sidebar('home-2') || is_active_sidebar('home-3') || is_active_sidebar('home-4') || is_active_sidebar('home-5')) : ?>
		<div id="main-content" class="mh-content mh-home-content">
			<?php dynamic_sidebar('home-2'); ?>
			<div style="width:100%" class="pyblikacii">
			    			<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Публікації</span></h4>
							<?php query_posts('cat=49&posts_per_page=7&caller_get_posts=1'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
<article class="mh-loop-item mh-clearfix post-90 post type-post status-publish format-standard has-post-thumbnail hentry category-novyny">
	<a href="<?php the_permalink(); ?>">
	<figure class="mh-loop-thumb">
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>
	</figure>
	
	<div class="mh-loop-content mh-clearfix">
		<header class="mh-loop-header">
			<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
<div class="mh-meta mh-loop-meta">
<span class="mh-meta-date updated"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?> <i style="margin-left:5px;font-size:14px !important;" class="fa fa-eye" aria-hidden="true"></i> <?php echo getPostViews(get_the_ID()); ?> </span>
</div>
		</header>
		<div class="mh-loop-excerpt">
			<div class="mh-excerpt"><p>
			<?php the_excerpt(); ?>
			</p>
</div>		</div>
	</div></a>
</article>
<?php endwhile; endif; ?>
		
						</div>
			<?php if (is_active_sidebar('home-3') || is_active_sidebar('home-4')) : ?>
				<div class="mh-home-columns mh-clearfix">
					<?php if (is_active_sidebar('home-3')) { ?>
		    			<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-3">
			    			<?php dynamic_sidebar('home-3'); ?>
						</div>
					<?php } elseif (is_active_sidebar('home-4')) { ?>
						<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-3">
							<div class="mh-widget mh-home-3 mh-sidebar-empty">
								<h4 class="mh-widget-title">
									<span class="mh-widget-title-inner">
										<?php printf(esc_html_x('Home %d - 1/3 Width', 'widget area name', 'mh-magazine-lite'), 3); ?>
									</span>
								</h4>
								<div class="textwidget">
									<?php printf(esc_html__('Please navigate to %1$1s in your WordPress dashboard and add some widgets into the %2$2s widget area.', 'mh-magazine-lite'), '<strong>' . esc_html__('Appearance &#8594; Widgets', 'mh-magazine-lite') . '</strong>', '<em>' . sprintf(esc_html_x('Home %d - 1/3 Width', 'widget area name', 'mh-magazine-lite'), 3) . '</em>'); ?>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php if (is_active_sidebar('home-4')) { ?>
		    			<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-margin-left mh-home-area-4">
			    			<?php dynamic_sidebar('home-4'); ?>
						</div>
					<?php } elseif (is_active_sidebar('home-3')) { ?>
						<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-margin-left mh-home-area-4">
							<div class="mh-widget mh-home-4 mh-sidebar-empty">
								<h4 class="mh-widget-title">
									<span class="mh-widget-title-inner">
										<?php printf(esc_html_x('Home %d - 1/3 Width', 'widget area name', 'mh-magazine-lite'), 4); ?>
									</span>
								</h4>
								<div class="textwidget">
									<?php printf(esc_html__('Please navigate to %1$1s in your WordPress dashboard and add some widgets into the %2$2s widget area.', 'mh-magazine-lite'), '<strong>' . esc_html__('Appearance &#8594; Widgets', 'mh-magazine-lite') . '</strong>', '<em>' . sprintf(esc_html_x('Home %d - 1/3 Width', 'widget area name', 'mh-magazine-lite'), 4) . '</em>'); ?>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php endif; ?>
			<?php dynamic_sidebar('home-5'); ?>
		</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('home-6')) { ?>
		<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-6">
        	<?php dynamic_sidebar('home-6'); ?>
		</div>
	<?php } elseif (is_active_sidebar('home-2') || is_active_sidebar('home-3') || is_active_sidebar('home-4') || is_active_sidebar('home-5')) { ?>
		<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-6">
			<div class="mh-widget mh-home-6 mh-sidebar-empty">
				<h4 class="mh-widget-title">
					<span class="mh-widget-title-inner">
						<?php printf(esc_html_x('Home %d - 1/3 Width', 'widget area name', 'mh-magazine-lite'), 6); ?>
					</span>
				</h4>
				<div class="textwidget">
					<?php printf(esc_html__('Please navigate to %1$1s in your WordPress dashboard and add some widgets into the %2$2s widget area.', 'mh-magazine-lite'), '<strong>' . esc_html__('Appearance &#8594; Widgets', 'mh-magazine-lite') . '</strong>', '<em>' . sprintf(esc_html_x('Home %d - 1/3 Width', 'widget area name', 'mh-magazine-lite'), 6) . '</em>'); ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<div class="wwwwq" style="width:100%;height:auto">
<h2 style="font-size:20px;margin-left:20px" class="mh-widget-title">Відео</h2>
		<div class="hrw2">
<?php query_posts('cat=11&posts_per_page=5'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="rubrikator">
	<a href="<?php the_permalink(); ?>">
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>

	
	<div class="mh-loop-content mh-clearfix">
		<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div></div>

<div>
<?php query_posts('cat=15&posts_per_page=1'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="biggg">
	<a href="<?php the_permalink(); ?>">
	
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-slider');
			} else {
				echo '<img style="width:100%" class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>
	
	
	<div class="bigtext">
		<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div>

<div class="wwwwq" style="width:100%;height:auto">
	<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Погляд</span></h4>
		<div class="hrw2">
<?php query_posts('cat=18&posts_per_page=5'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="rubrikator">
	<a href="<?php the_permalink(); ?>">
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>

	
	<div class="mh-loop-content mh-clearfix">
		<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div>
	
<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Політика</span></h4>
		<div class="hrw2">
<?php query_posts('cat=6&posts_per_page=5'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="rubrikator">
	<a href="<?php the_permalink(); ?>">
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>

	
	<div class="mh-loop-content mh-clearfix">
		<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div>
	
<h4 class="mh-widget-title"><span class="mh-widget-title-inner"><!-- <img draggable="false" role="img" class="emoji" alt="🇺🇦" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f1fa-1f1e6.svg" style="font-size: 27px; margin-bottom: -3px !important;"> -->До перемоги <img draggable="false" role="img" alt="🇺🇦" src="/wp-content/uploads/2022/07/flag_131x27.webp" ></span></h4>
		<div class="hrw2">
<?php query_posts('cat=10&posts_per_page=5'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="rubrikator">
	<a href="<?php the_permalink(); ?>">

	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>
	
	
	<div class="mh-loop-content mh-clearfix">
		<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div>	

<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Суспільство</span></h4>
		<div class="hrw2">
<?php query_posts('cat=4&posts_per_page=5'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="rubrikator">
	<a href="<?php the_permalink(); ?>">
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>
	
	<div class="mh-loop-content mh-clearfix">
		<h3 class="entry-title mh-loop-title">
				<?php the_title(); ?>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div></div>

<div>
<?php query_posts('cat=16&posts_per_page=1'); ?>
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

	<div class="biggg">
	<a href="<?php the_permalink(); ?>">
	
	<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-lite-slider');
			} else {
				echo '<img style="width:100%" class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Image', 'mh-magazine-lite') . '" />';
			} ?>
	
	
	<div class="bigtext">
		<h3 class="entry-title mh-loop-title">
				<p><?php the_title(); ?></p>
			</h3>
	</div></a>
</div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>