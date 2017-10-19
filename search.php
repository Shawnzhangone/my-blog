<style>
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

<div id="post">
	<div class="container">
		<div id="left_box" class="fl">
		<div class="cat-title">【<?php echo get_search_query(); ?>】关键词下的文章：</div>
			<?php
			if(have_posts()){//判断是否有文章
				while(have_posts()){
					the_post();//获取下一篇文章的信息
			?>
		<div class="category-con clearfix">
  			<div class="pic-left">
  				<a href="<?php the_permalink(); ?>">
    				<div class="thumbnail">
						<?php if ( has_post_thumbnail() ) : 
				 		the_post_thumbnail( array(300,180) ); 
						 else:   //显示默认图片
						endif; ?> 
    				
  					</div>
  				</a>
  			</div>
  			<div class="post-body">
  				<div class="caption">
  					<a href="<?php the_permalink(); ?>">
                		<h3><?php the_title(); ?></h3>
               		</a> 
               	</div>		
    			<div class="post-item">
						<?php the_category(','); ?><span> |</span>
						<a href="http://www.amxzhang.com">
							<?php the_author(); ?><span> |</span>
						</a>
						<i class="iconfont icon-liulan"></i><?php echo get_post_meta($post->ID, '_liulan',true); ?><span> |</span>
						<?php the_time( 'Y-m-d' ); ?>
				</div>
				<div class="posts-content">
						<p><?php the_content(); ?></p>
				</div>
        	
			</div>
		</div>
	<?php
		}
		}else {
			echo '没有日志可以显示';
		}
	?>
			<div class="posts_nav_link">
				<?php posts_nav_link(); ?>
			</div>
		
		</div>
		<div class="sideb fr">
			<?php get_sidebar(); ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>