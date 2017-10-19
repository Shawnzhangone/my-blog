<?php get_header(); ?>
<!--首页-->
<section id="home_page" data-back-lg="<?php echo get_template_directory_uri(); ?>/images/blog-bg.jpg" data-back-sm="<?php echo get_template_directory_uri(); ?>/images/blog-bg-sm.jpg">
    <div class="blog-log wow fadeInDown" data-wow-delay="400ms"><h1>张潇的博客,shawn's blog</h1><img src="<?php echo get_template_directory_uri(); ?>/images/blog-logo.png" alt=""></div>
    <div class="center abstract wow fadeInUp"  data-wow-delay="400ms" >
        <p>爱骑行，爱登山，爱旅游</p>
        <p>走遍世界不仅仅是个梦想</p>
        <p>爱挑战，爱折腾</p>
        <p>生命不息，折腾不止！</p>
        <p>努力不一定有好的结果，不努力肯定没有结果，年轻就是奋斗的资本，别让以后的自己后悔。</p>
        <p></p>
    </div>
    <div class="bg"></div>
	<div id="down_arrow">
		<a href="#start">
			<p class="wow bounce" data-wow-delay="800ms">点此开始</p>
			<div></div>
		</a>
		<a name="start"></a>
	</div>
</section>
<!--/首页-->
<!--Article-->
<section id="article">
    <div class="container">
        <div class="article-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" style=" animation-duration: 100ms; animation-delay: 400ms; animation-name: none;">
	
		
        <h3 >ARTICLE</h3>
        <p>最新文章</p>
    </div>
	<div class="row">
	<?php
		if(have_posts()){//判断是否有文章
			while(have_posts()){
				the_post();//获取下一篇文章的信息
			?>
		<div class="col-sm-6 col-md-4 column">
            <div class="thumbnail" >
			<a href="<?php the_permalink(); ?>" target="_blank">
				<?php if ( has_post_thumbnail() ) : 
				 the_post_thumbnail( array(350,210) ); 
					 else: echo '<img class="lazy" data-original="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" height="210" width="350" />'; 
        //显示默认图片  src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg"
					endif; ?>
                    <div class="caption">
                        <h3 class="wow fadeInLeft" data-wow-delay="400ms"><?php the_title(); ?></h3>
                    </div>
              </a>
				<div class="post-item wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms" style=" animation-duration: 1000ms; animation-delay: 400ms; animation-name: none;">
						<?php the_category(','); ?><span> |</span>
						<a href="http://www.amxzhang.com">
							<?php the_author(); ?><span> |</span>
						</a>
                        <i class="iconfont icon-liulan"></i><?php echo get_post_meta($post->ID, '_liulan',true); ?><span> |</span>

						<?php the_time( 'Y-m-d' ); ?>
				</div>
				<a href="<?php the_permalink(); ?>" target="_blank">
                    <div class="posts-content wow fadeIn"  data-wow-duration="1000ms" data-wow-delay="400ms" style=" animation-duration: 1000ms; animation-delay: 400ms; animation-name: none;">
					   <p><?php the_content(); ?></p>
				    </div>
                </a>
            </div>
        </div>
			<?php
			}
		}else {
			echo '没有日志可以显示';
		}
	?>
	</div>
</div>
</section>
<!--/Article-->

<!--Case Show-->
<section id="caseShow">
    <div class="container">
        <div class="case-top center">
            <h2 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" style="animation-duration: 1000ms; animation-delay: 400ms; animation-name: none;">CASE SHOW</h2>
        </div>
        <div class="caseshow-box">
            <div class="case-box clearfix">
                <div class="case-box-left">
                    <ul>
                        <li><a href="http://www.amxzhang.com/3dalbum" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/album.png"  alt="3Dalbum"></a></li>
                        <li><a href="javacript:;" ><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/bilibili.jpg" alt=""></a></li>
						<li class="li_17"><a href="http://www.amxzhang.com/web/mobileweb/" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/mobile_web.png" alt=""></a></li>
                        <li class="li_32"><a href="javacript:;"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/h5.jpg" alt=""></a></li>
                        
                    </ul>
                </div>
                <div class="case-box-right">
                    <!-- <ul>
                        <li><a href="http://www.amxzhang.com/3dalbum" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/album.png" alt="3Dalbum"></a></li>
                        <li><a href="#" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/bilibili.jpg" alt=""></a></li>
                        <li><a href="javascript:;" ><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/thumbnails/h5we.jpg" alt=""></a></li>
                    </ul> -->
                </div>
            </div>
            <!-- <div class="case-switch center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fire.png" alt="">
                <div class="showcircle">
                    <div class="showcir"></div>
                </div>
                <div class="circleProgress_wrapper">
                     
                    <div class="wrapper right"></div>
                    <div class="wrapper left"></div>
                </div>
            </div> -->
            <div class="casemore center">
                    <p class="center"><a href="" >more... </a></p>            
            </div>
        </div>
    </div>
</section>
<!--/Case Show-->

<!--相册-->

<section id="album">
    
    <div class="container album">
        <h2 class="center wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms" style="animation-duration: 1000ms; animation-delay: 700ms; animation-name: none;">个人相册</h2>
        <p class="center album-text wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms" style="animation-duration: 1000ms; animation-delay: 400ms; animation-name: none;">记录一些光和影及生活点滴</p>
        <div class="piclove fl wow fadeInDown lazy" data-wow-duration="1000ms" data-wow-delay="400ms" data-original="<?php echo get_template_directory_uri(); ?>/images/piclovebg.jpg">
            <a href="">
               <i class="iconfont icon-tupian"></i>
                <p>精选图片</p> 
            </a>
        </div>
        <div class="piclife fl wow fadeInDown lazy" data-wow-duration="1000ms" data-wow-delay="500ms" data-original="<?php echo get_template_directory_uri(); ?>/images/piclifebg.jpg">
            <a href="" class="center">
                <i class="iconfont icon-shenghuosuipai"></i>
                <p>生活点滴</p>
            </a>
        </div>
        <div class="picview fl wow fadeInDown lazy" data-wow-duration="1000ms" data-wow-delay="600ms" data-original="<?php echo get_template_directory_uri(); ?>/images/picviewbg.jpg">
            <a href="">
                <i class="iconfont icon-huwai"></i>
                <p>陌路风景</p>
            </a>
        </div>
        <div class="picmovie fl wow fadeInDown lazy" data-wow-duration="1000ms" data-wow-delay="700ms" data-original="<?php echo get_template_directory_uri(); ?>/images/picmoviebg.jpg">
            <a href="">
                <i class="iconfont icon-dianying"></i>
                <p>经典电影</p>
            </a>
        </div>
        <div class="picanimal fl wow fadeInDown lazy" data-wow-duration="1000ms" data-wow-delay="800ms" data-original="<?php echo get_template_directory_uri(); ?>/images/picanimalbg.jpg">
            <a href="">
                <i class="iconfont icon-dianying-"></i>
                <p>精致漫画</p>
            </a>
        </div>
    <!--/相册-->
<!--  <h3>打个招呼吧</h3>
        <p>我很期待与你的交流，你的留言是我的动力。</p>
        <form class="msg-table" action="#">
            <div>
                <input type="text" name="author" placeholder="称呼">
            </div>
            <div>
                <textarea name="msg" id="msg" rows="5" placeholder="说点什么吧"></textarea>
                <div class="sub-item clearfix">
                     <div class="emoj">
                         <span></span>
                         表情∨
                     </div>
                     <div class="msg-pic">
                         <span></span>
                         图片
                     </div>
                </div>
            </div>
            <div>
                <input type="text" name="contactWay" placeholder="留个联系方式吧">
            </div>
            <button>发布</button>
        </form>
        <p>隐私说明：联系方式不会被公开显示；你的 IP 地址会被保存，但只会公开显示你当前所在的城市名。</p>
     --></div>
    <div class="bg-wall"></div>
</section>
<!--/留言板-->




<?php get_footer(); ?>