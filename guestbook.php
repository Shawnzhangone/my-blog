<?php
/*
	Template Name:留言板
*/
if ( post_password_required() ) {
	return;
}
?>
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
	<div id="message_board">
		<h3 class="center">留言板</h3>
		<p>欢迎来访，留下点什么吧！</p>
		<?php comments_template(); ?>
		</div>
	</div>
	<div class="sideb fr">
		<?php get_sidebar(); ?>
	</div>
	
	
</div>
</section>
<?php get_footer(); ?>


