<section class="blog">
  <div class="blog-container">
    <div class="blog-heading">
      <h2><img src="<?php bloginfo( 'template_directory' ); ?>/images/heading/heading-recentposts.png"></h2>
      <h3>最新記事</h3>
      <p>当WEBマガジンの最新記事をご紹介致します。留学先の現地の環境や、海外へ旅行・留学する際に考えておきたいことなど、初めて日本を離れる方、すでに海外経験のある方どちらにも役立つ記事を公開しています。</p> 
    </div> <!-- /.blog-heading -->

    <ul class="blog-contents" id="">
      <?php 
      $posts = get_posts(array(
    'posts_per_page' => 4, // 表示件数
    // 'category' => 4 // カテゴリIDもしくはスラッグ名
  ));
  ?>

  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    <li class="blog-content">
      <div class="blog-content-left" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
      </div>
      <div class="blog-content-right">
        <p><?php the_time('Y/m/d') ?></p>
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <?php the_category(); ?>
        <p><?php the_excerpt(); ?></p>
        <a class="blog-btn" href="<?php the_permalink() ?>">続きを見る</a>
      </div>
    </li>
  <?php endforeach; endif; wp_reset_postdata(); ?>
  


</ul>


<div class="btn-box">
  <a class="blog-btn" href="<?php bloginfo( 'url' ); ?>/blog" class="link-btn">もっと読む &gt;</a>
</div>

</div> <!-- /.blog-container -->
</section> <!-- /.blog -->




