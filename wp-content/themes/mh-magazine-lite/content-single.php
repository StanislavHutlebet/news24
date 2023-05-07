<?php /* Default template for displaying content. */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mh-clearfix"><?php
		the_title('<h1 class="entry-title">', '</h1>');
		mh_post_header(); ?>
	</header>
	<?php dynamic_sidebar('posts-1'); ?>
	<div class="entry-content mh-clearfix"><?php
		mh_magazine_lite_featured_image();
		the_content(); ?>
        <div class="subscribe">
            <div class="text">
                <p>Більше інформації, оперативні новини та коментарі в нашому телеграм каналі. Підписуйся та будь в курсі подій.</p>
            </div>
            <div class="icons_link">
                <a href="https://t.me/Uzhgorod24"><img src="https://uz24.globalistic.org.ua/wp-content/uploads/2022/07/1024px-Telegram_logo.svg_-1-150x150-1.png" width="30px" height="30px"></a>
            </div>
        </div>
	</div><?php
	the_tags('<div class="entry-tags mh-clearfix"><i class="fa fa-tag"></i><ul><li>','</li><li>','</li></ul></div>');
	dynamic_sidebar('posts-2'); ?>
</article>