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
			<?php 
				$zan = get_post_meta($post->ID, '_liulan',true);
				update_post_meta($post->ID, '_liulan', $zan + 1);
			 ?>
			<div class="caption center">
               <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            </div>
			<div class="post-item">

				<div class="post-meta center">
					<?php the_category(','); ?><span> |</span>
					<?php the_author(); ?><span> |</span>
					<i class="iconfont icon-liulan"></i><?php echo get_post_meta($post->ID, '_liulan',true); ?><span> |</span>
					<?php the_time( 'Y-m-d' ); ?>
					
				
				</div>
				<div class="post-content"><?php the_content(); ?></div>
				<div class="post-nav">
					<?php previous_post_link('上一篇：%link'); ?>
					<span class="blank5"></span>
					<?php next_post_link('下一篇：%link'); ?>
				</div>
			</div>
		</div>
		<?php comments_template(); ?>
		
	</div>
	<div class="sideb fr">
		<?php get_sidebar(); ?>
	</div>
	
	
</div>
</section>
<?php get_footer(); ?>