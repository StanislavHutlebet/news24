<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
	<div id="main-content" class="mh-loop mh-content" role="main"><?php
		mh_before_page_content();
		if (have_posts()) { ?>
			<header class="page-header"><?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				if (is_author()) {
					mh_magazine_lite_author_box();
				} else {
					the_archive_description('<div class="entry-content mh-loop-description">', '</div>');
				} ?>
			</header><?php
			mh_magazine_lite_loop_layout();
			mh_magazine_lite_pagination();
		} else {
			get_template_part('content', 'none');
		} ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<div class="wwwwq" style="width:100%;height:auto">
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
	
<h4 class="mh-widget-title"><span class="mh-widget-title-inner">До перемоги <img draggable="false" role="img" alt="🇺🇦" src="/wp-content/uploads/2022/07/flag_131x27.webp" ></span></h4>
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

<?php get_footer(); ?>