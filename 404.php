
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

<div id="p404">
	<div class="p404content center">
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.gif" alt="404">
		<p>您当前访问的页面不存在！ <font id="jump">5</font> 秒后返回首页，或<a href="<?php bloginfo('url');?>">直接返回</a></p>
	
	</div>
	
</div>

<?php get_footer(); ?>

<script>
	//404
    function countDown(secs){
        $("#jump").html(secs);
        if(--secs > 0){
            setTimeout("countDown(" + secs + ")", 1000);
        }else {
            window.location.href = "<?php bloginfo('url'); ?>";
        }
    };
    countDown(5);
</script>