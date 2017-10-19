<style>
section{
	background: #f1f1f1;
}
#header a,
#header .navbar .container .barweb,
#top_right .searchcon,
#header .iconfont {
	color: #000;
}
#header .iconfont {
	font-weight: 600;
}
</style>
<?php get_header(); ?>
<section>
<div id="post" class="container">
	<div id="left_box" class="fl">
		<div id="post_box">
			<?php
				the_post();
			?>
			<div class="post-item">
				<div class="post-content"><?php the_content(); ?></div>
			</div>
		</div>
	</div>
	<div class="sideb fr">
		<?php get_sidebar(); ?>
	</div>
	
	
</div>
</section>
<?php get_footer(); ?>