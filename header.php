<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<? bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="张潇个人博客，web前端，个人故事...">
    <meta name="keywords" content="张潇，个人博客，张潇的个人博客，web前端，shawn，blog">
    <?php 
		if(is_home()){$title = get_bloginfo('name');}
		else{$title = wp_title('',false)."_张潇的博客";}//页面标题
	?>
	
	<title><?php echo $title; ?></title>
    <!--<meta name="description" content="<? bloginfo('description'); ?>" /> -->  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); //模板目录路径?>/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?PHP bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/animate.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/languages/iconfont/iconfont.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/zxicon.icon.png">

</head>
<body>
<!--头部-->
<header id="header">
    <div class="topbar">
        <div class="container">
            <a href="http://www.amxzhang.com"></a>
            <p>欢迎各位小伙伴交流
                <a href="#contact">CONTACT ME</a> 
            </p>
			<div><?php brnav();?> </div>
        </div>
    </div>
    <nav class="navbar navbar-blog navbar-static-top">
        <div class="container">
            <div id="top_right" class="">
                <div id="close_search"><i class="iconfont icon-cha1"></i></div>
                    <?php dynamic_sidebar('top-right-widget-area'); ?>
                <div class="searchcon">输入关键词并回车搜索</div>
            </div>
            <div class="navbarbox clearfix">
                <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="home" href="http://www.amxzhang.com">首页</a>
                <!--<a class="barweb" href="#">-->
                <div class="barweb">
                    WEB前端<i>∨</i>
                    <ul class="web-wrap">
                        <li class="animated fadeIn" style=" animation-delay: 0.2s;"><a href="<?php echo home_url() ?>/category/html5/">HTML5</a></li>
                        <li class="animated fadeIn" style=" animation-delay: 0.25s;"><a href="<?php echo home_url() ?>/category/css/">CSS</a></li>
                        <li class="animated fadeIn" style=" animation-delay: 0.3s;"><a href="<?php echo home_url() ?>/category/javascript/">JavaScript</a></li>
                        <li class="animated fadeIn" style=" animation-delay: 0.35s;"><a href="<?php echo home_url() ?>/category/jquery">Jquery</a></li>
						<li class="animated fadeIn" style=" animation-delay: 0.4s;"><a href="<?php echo home_url() ?>/category/ajax">ajax</a></li>
						<li class="animated fadeIn" style=" animation-delay: 0.5s;"><a href="<?php echo home_url() ?>/category/vue.js">vue.js</a></li>
                    </ul>
                </div> 
            </div>
            <div id="search_icon" class="animated lightSpeedIn" style=" animation-delay: 0.7s;">
                <i class="iconfont icon-search-copy"></i>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="animated fadeInDown" style=" animation-delay: 0.2s;"><a href="<?php echo home_url() ?>/category/frame/">框架</a></li>
                    <li class="animated fadeInDown" style=" animation-delay: 0.3s;"><a href="<?php echo home_url() ?>/category/case/">案例</a></li>
                    <li class="animated fadeInDown" style=" animation-delay: 0.4s;"><a href="<?php echo home_url() ?>/category/game/">游戏</a></li>
                    <li class="animated fadeInDown" style=" animation-delay: 0.5s;"><a href="<?php echo home_url() ?>/category/history">朝花夕拾</a></li>
                    <li class="animated fadeInDown" style=" animation-delay: 0.6s;"><a href="<?php echo home_url() ?>/category/photo/">个人相册</a></li>
                    <li class="animated fadeInDown" style=" animation-delay: 0.7s;"><a href="<?php echo home_url() ?>/message/">给我留言</a></li>
                    <!-- <li><?php wp_nav_menu(array('menu'=>'board'))?></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-md hidden-sm">
                    <li class="animated lightSpeedIn" style=" animation-delay: 0.7s;"><a href="<?php echo get_template_directory_uri(); ?>/about-me/">ABOUT ME</a></li>
                </ul>
            </div>
        </div>
		
    </div>
    </nav>
    <div id="back_top">
        <i class="iconfont icon-huojiancopy"></i>
    </div>
    
</header>
<!--/头部-->