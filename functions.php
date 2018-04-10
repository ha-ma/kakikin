<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support('admin-bar');
// add_filter( 'show_admin_bar', '__return_false' );




// CSSファイルの読み込み
function theme_styles() {
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'fa_css', 'http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'googlefont_en_css', 'https://fonts.googleapis.com/css?family=Gloria+Hallelujah' );
  wp_enqueue_style( 'bxslider_css', get_template_directory_uri() . '/css/jquery.bxslider.min.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// JSファイルの読み込み
function theme_js() {

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );


  wp_enqueue_script( 'bxslider_js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );



/* ==================================================================== */
/* 記事抜粋 the_excerpt(); の文字数調整 */
/* -------------------------------------------------------------------- */
function change_excerpt_length($length) {
  return 40;
}
add_filter('excerpt_length', 'change_excerpt_length');



/* ==================================================================== */
/* 記事抜粋 the_excerpt(); の最大文字数を超えた場合の動作 */
/* -------------------------------------------------------------------- */
function change_excerpt_more($more) {
  return '…';
}
add_filter('excerpt_more', 'change_excerpt_more');



/* ==================================================================== */
/* 記事抜粋 the_excerpt(); のpタグ削除 */
/* -------------------------------------------------------------------- */
remove_filter('the_excerpt', 'wpautop');




/* ==================================================================== */
/* 記事タイトル the_title(); の文字数調整 */
/* -------------------------------------------------------------------- */
function limit_title_char($title){
  if(mb_strlen($title) > 28 && !(is_single()) && !(is_page())){
    $title = mb_substr($title,0,28) . "…";
  }
  return $title;
}
add_filter( 'the_title', 'limit_title_char' );


/* ==================================================================== */
/* メニュー */
/* -------------------------------------------------------------------- */

register_nav_menus( array(
  'global'    => __( 'Global Menu', 'dosukoi' ),
  'social' => __( 'Social Links Menu', 'dosukoi' ),
  ) );



/* ==================================================================== */
/* サイドバーを1つ設置する */
/* -------------------------------------------------------------------- */

register_sidebar(array(
      'name'=>'sidebar-blog',
      'before_widget'=>'<div class="sidebar-block">',
      'after_widget'=>'</div>',
      'before_title' => '<h2 class="sidebar-title">',
      'after_title' => '</h2>'
));


/* ==================================================================== */
/* ページネーション */
/* -------------------------------------------------------------------- */
//Pagenation
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
     echo "<div class=\"pagenation\">\n";
     echo "<ul>\n";
     //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
    //Next：総ページ数より現在のページ値が小さい場合は表示
    if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
    echo "</ul>\n";
    echo "</div>\n";
     }
}