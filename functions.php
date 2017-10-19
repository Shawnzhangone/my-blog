<?php 
add_theme_support( 'post-thumbnails' ); 



	//注册一个小工具
	register_sidebar(
		array(
			'name'          => '侧边栏',
			'before_widget' => '<div class="sbox">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		)
	);
	register_sidebar(
		array(
		'name' => __('Top Right', 'blankslate'),
		'id' => 'top-right-widget-area',
		'before_widget' => '<div class="searchb">',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'after_widget' => '</div>'
		)
	);

function brnav()
	{
		if( !is_home() ){ ?>
		<div class="brnav">
			<a href="<?php bloginfo('url'); ?>">首页</a> > 
			<?php
			  if( is_category() ) { single_cat_title(); }
			  elseif ( is_search() ) {  echo $s; }
			  elseif ( is_single() ) { 
			  	  $cat = get_the_category();
			  	  $cat = $cat[0];
			  	  echo '<a href="' . get_category_link( $cat ) . '">' . $cat->name . '</a> > 文章内容';
			  }
			  elseif ( is_page() ) { the_title(); }
			  elseif ( is_404() ) { echo '404 错误页面'; }
			?>
		</div>
		<?php }
	};
?>
