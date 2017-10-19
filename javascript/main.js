/**
 * Created by zhang on 2017/7/16.
 */
 
jQuery(document).ready(function ($) {

        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
        new WOW().init();
    });    
$(function () {
    var $globalWidth = $(window).width(),
     $globalHeight = $(window).height();
    // 背景换小图
    var changeHome = function(){
        if($globalHeight < 500){
            $("#home_page").css({"height":"600"});
        }
        else{
        $("#home_page").css({"height":$globalHeight - +"30"});  
        }
    }();

    $(window).scroll(function () {
        
        docScrollTop = $(document).scrollTop();
        topbarFix();
        albumBg();
        backtop();
        topbarHide();
    });
    var p = 0,t = 0;
    function topbarHide(){
             p = $(this).scrollTop();          
            if(t<=p){//下滚  
                  
                  if($(".web-wrap").css("display")=="none" && $("#navbar-collapse").css("display")=="none" && $("#top_right").css("display")=="none"){
                    $(".navbar").hide(600);
                    $("#back_top").show(); 
                  }               
            }                
            else{//上滚  
                $(".navbar").show(600);

            }  
            setTimeout(function(){t = p;},0);    
       
    };

    function topbarFix(){
        var topbarH = $(".topbar").height();
        if (docScrollTop > topbarH) {
            $(".navbar").css({"position": "fixed", "top": 0, "margin-top": "0"});
        } else {
            $(".navbar").css({"position": "absolute", "top":"40px"});
        }
        if (docScrollTop > $("#home_page").height() + topbarH) {
            $(".navbar").css({"background": "rgba(40, 40, 40, 0.7)"});
            $("#header .navbar a,#header .barweb").css({"color":"#ffffff"});
        }
        else if($("#home_page").height()>1){
            $(".navbar-blog .navbar-nav > li > a").css({"color":"#ffffff"});
            $(".navbar").css({"background": "rgba(40, 40, 40, 0)"});
        }
        else{
             $(".navbar").css({"background": "rgba(40, 40, 40, 0)"});
             $("#header .navbar a,#header .barweb").css({"color":"#000"});
        }
    }; 
    
//web前端下拉
    (function(){
        $(".barweb").on("mouseenter", function () {
            $(".web-wrap").fadeIn("600");
        });
        $(".barweb").on("mouseleave", function () {
            $(".web-wrap").fadeOut("600");
        });
    })();

//搜索
    (function(){
        $("#search_icon").on('click', function() {
            $("#header .navbar").animate({"height":"155px"},500);
            $("#top_right").fadeIn();
        });
        $("#close_search").on('click', function() {
            $("#header .navbar").animate({"height":"65px"},500);
            $("#top_right").fadeOut();
        });
    })();

    //遍历.case-box ul li
//case show
    // $(".left").mouseenter(function(event) {
    //     // $(".showcircle").css({"transform": "rotate(0deg)"});
    //     $(".showcircle").css('transform','rotate('+(180-180*)+'deg)')
    //     $(".showcircle").animate({
    //         param1: value1,
    //         param2: value2},
    //         speed, function() {
    //         /* stuff to do after animation is complete */
    //     });
    // }); 

  
    // $(".right").mouseenter(function(event) {
    //     $(".showcircle").animate({"transform": "rotate(180deg)"},500);
    // });

    (function(){
        $(".case-box li").mouseover(function(event) {
            $(this).siblings().stop().fadeTo('500', 0.4);
        });
        $(".case-box li").mouseout(function(event) {
            $(this).siblings().stop().fadeTo(500,1);
        });
    })();
   function backtop(){
        if(docScrollTop > $globalHeight){
            $("#back_top").fadeIn();
            $("#back_top").css({"top":0.85*$globalHeight,"right":"6%"});
        }else {
            $("#back_top").fadeOut();

        }
        $("#back_top").click(function() {  
                $("html,body").stop().animate({scrollTop:0},1000);
        });
    }; 

    $(".navbar-toggle").on("click", function () {
        $("#navbar-collapse").css({"background": "rgba(66,33,88,0.8)"});
    });
//album
    function albumBg(){
        var topbarH = $(".topbar").height();
        var home_pageH = $("#home_page").height();
        var articleH = $("#article").height();
        var caseShowH = $("#caseShow").height();
        if(docScrollTop > topbarH + home_pageH + articleH + 150 ){
            $(".bg-wall").css({"position":"fixed","top":"0"});
        }
        else {
            $(".bg-wall").css({"position":"relative"});
        }
    }; 
    function changebg(classn){
        $("."+ classn).mouseenter(function(event) {
                var bgImage = $(this).data('original');
                $(".bg-wall").stop().animate({"opacity":"0.8"},300,function(){
                    $(this).css({"background-image":'url("'+bgImage+'")'}).stop().animate({"opacity":"1"},300);
                });
        });
    };
    changebg("piclove");
    changebg("piclife");
    changebg("picview");
    changebg("picmovie");
    changebg("picanimal");
// 留言板
    $("#submit").val("发布");



});