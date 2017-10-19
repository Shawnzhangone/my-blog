<!--底部-->
<footer id="footer">
 <div class="footer_link">
   <div class="footer_link_box container">
	  <ul>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 300ms; animation-name: none;"><a href="http://www.ruanyifeng.com/home.html">阮一峰博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 400ms; animation-name: none;"><a href="http://www.zhangxinxu.com/wordpress/">张鑫旭博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="500ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 500ms; animation-name: none;"><a href="http://blog.zhaojie.me/">老赵博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 600ms; animation-name: none;"><a href="http://winter-cn.cnblogs.com/">寒冬博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="700ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 700ms; animation-name: none;"><a href="http://www.haorooms.com/">Haorooms博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="800ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 800ms; animation-name: none;"><a href="http://taobaofed.org/">淘宝前端团队</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="900ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 900ms; animation-name: none;"><a href="http://www.qdfuns.com/">前端网</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 1000ms; animation-name: none;"><a href="http://www.barretlee.com/entry/">小胡子哥博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="1200ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 1100ms; animation-name: none;"><a href="http://www.yangqq.com/">杨青个人博客</a></li>
		<li class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="1300ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 1200ms; animation-name: none;"><a href="http://www.duanliang920.com/">段亮个人博客</a></li>
	  
      </ul>
    </div>
 </div>
 
 <div class="footer-b">
 <div class="footer-box container">	

 <div class="row">
    <div class=" col-md-4 column">
        <div class="footer-log clearfix center">
            <a href="http://www.amxzhang.com/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-logo-f.png" alt="">
            </a>
            <p class="fr">Less is More</p>
        </div>
    </div>
    <div class=" col-md-4 column">
        <div class="social center">
            <h4>你可以在这些社交网络上找到我</h4>
            <a name="contact"></a>
            <div class="social-link">
                <a href="https://github.com/Shawnzhangone" alt="Github"><i class="iconfont icon-github"></i></a>
                <a href="http://weibo.com/730012119" alt="新浪微博" ><i class="iconfont icon-shejiao-xinlangweibo"></i></a>
                <a href="" alt="微信"><i class="iconfont icon-wechat"></i></a>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=877760278&amp;site=qq&amp;menu=yes" class="mobile-hide iconfont icon-qq" target="_blank" alt="腾讯QQ"><i class="iconfont icon-shejiao-QQ"></i></a>
            </div>
        </div>
    </div>
  
    <div class="col-md-4 column center">
        <div class="shareqr">
            <h4>你也可以微信扫一扫分享给好友或朋友圈</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/images/sqr.png" alt="本页二维码" title="用微信扫描可分享本博客给好友或朋友圈">
        </div>
    </div>
    </div>
    <div class="copyright center">
        
        <div class="vistors">
            <?php
                
                $view = get_option('view');
				if (is_home() || is_front_page()) {
					update_option( 'view' , $view + 1 );
				}
            ?>
            <p>
            已有<?php echo $view; ?>人次访问
            </p>
        </div>
        <p class="design">Theme by Shawn</p>
        <p class="cright">Copyright © 2017 www.amxzhang.com. All Rights Reserved.</p>
</div>
</div>
</div>

</footer>
<!--/底部-->


<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/wow.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/main.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.lazyload.min.js" type="text/javascript"></script>


</body>
</html>