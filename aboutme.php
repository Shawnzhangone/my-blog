<?php
/*
	Template Name:关于我
*/
?>
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
section{
	background: #f1f1f1;
}
</style>
<?php get_header(); ?>
<section>
	<div id="post" class="container">
		<div id="left_box" class="fl">
			<div id="message_board" class="about">
				<h3 class="abouttitle">Just about me</h3>
				<div class="abstract">
				<p>姓&nbsp;&nbsp;&nbsp;&nbsp;名：张潇</p>
				<p>学&nbsp;&nbsp;&nbsp;&nbsp;历：本科</p>
				<p>所在地：四川成都</p>
				<p>职&nbsp;&nbsp;&nbsp;  业：前端开发</p>	
				<p class="text-2">自我说明: 90后男生，才入门前端开发。参加了17年考研，破了名校梦，不幸走上了调剂的道路，不想将就，遂自学前端。现在还需要学习的东西很多，继续努力！
				之前本科学过java，Android开发。现在先从前端入手，目标是打通前后端。</p>	
				</div>
			</div>
		<div class="about">
			<h3 class="abouttitle">Just about blog</h3>
			<div class="abstract">
				<p class="text-2">刚开始实验性建的个人博客，这里有我学习前端的笔记，和经验。我会慢慢完善经营本博客。</p>
				<p class="text-2">本博客用的wordpress做CMS，自己做的页面主题开发。还不太完善，今后会慢慢改进。</p>
				<p><a class="linkcol" href="https://github.com/Shawnzhangone/my-blog" alt="Github">wordpress主题源码</a></p>
			</div>
		</div>
	</div>
	<div class="sideb fr">
		<?php get_sidebar(); ?>
	</div>
	
	
</div>
</section>
<?php get_footer();?>