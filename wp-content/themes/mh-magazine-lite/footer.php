<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>
<div class="mh-copyright-wrap">
	<div class="mh-container mh-container-inner mh-clearfix">
		<p class="mh-copyright"><?php printf(esc_html__('Copyright &copy; %1$s'), date("Y")); ?> <a href="https://uzhgorod24.com/">Портал новин Ужгород 24.</a> Всі права захищено. <a style="font-size:11px;color:gold" target="blank" href="https://globalistic.net/">Зроблено: Globalistic </a></p>
	</div>
</div>

<script>
	function newsItemDSN() {
		let news_items = document.querySelectorAll('.novini > ul > li');
		if ( news_items ) {
			let news_count = news_items.length;
			if ( window.innerWidth < 768 ) {
				for ( let i = 10; i < news_count; i++) {
					news_items[i].style.display = "none";
				}
			} else {
				for ( let i = 10; i < news_count; i++) {
					news_items[i].style.display = "list-item";
				}
			}
		}
	}
	
	window.onload = newsItemDSN;
	window.onresize = newsItemDSN;
	document.addEventListener("DOMContentLoaded", newsItemDSN);
</script>

<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>