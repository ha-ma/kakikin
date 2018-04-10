<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div id="container-site" class="container cf">

    <button id="menu-icon" type="button" class="btn_menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <a id="global-logo-desktop" class="global-logo-desktop" href="<?php bloginfo('url'); ?>" title="aystudy-logo" alt="aystudy-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icons/logo-white-3.png"></a>


    <header id="header">
      <div id="header-container" class="header-container">

        <a id="global-logo" class="global-logo" href="<?php bloginfo('url'); ?>" title="aystudy-logo" alt="aystudy-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icons/logo-white-3.png"></a>

      </div> <!-- /#container-header -->

    </header>


    <nav id="global-nav" class="global-nav cf">
      <div class="nav-container">
        <ul id="global-items" class="header-menu">
          <li class="menu-item menu-item-logo"><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icons/logo-white-3.png"></a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/category/studyabroad">留学</a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/category/workingholiday">ワーホリ</a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/category/travel">旅行</a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/category/prep">事前準備</a></li>
          <!-- <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/category/event">イベント</a></li> -->
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/questionaires">留学後アンケート</a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/forums">掲示板</a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/voice">先輩の声</a></li>
          <!-- <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/download">ダウンロード資料</a></li>
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/studyabroadform">留学のお申し込み</a></li> -->
          <li class="menu-item menu-item-mb"><a href="<?php bloginfo( 'url' ); ?>/contact">お問合せ</a></li>


          <li class="menu-item menu-item-mb"><a href="https://www.instagram.com/ay_travel_2011" target="_brank">Instagram</a></li>
          <li class="menu-item menu-item-mb"><a href="https://www.facebook.com/ayprojectyokohama" target="_brank">Facebook</a></li>

          
        </ul>
      </div> <!-- /nav-container -->
    </nav> <!-- #global-nav -->









