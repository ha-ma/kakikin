<section class="relatedposts">
  <div class="relatedposts-container">
  <div class="relatedposts-heading">
    <h2>RELATED POSTS</h2>
    <h3>関連記事</h3>
  </div> <!-- /.relatedposts-heading -->
  <ul class="blog-contents" id="">
    <?php
    foreach((array)$categories as $category):
      array_push( $category_ID, $category -> cat_ID);
    endforeach ;

    $args = array(
      'post__not_in' => array($post -> ID),
      'posts_per_page'=> 3,
      'category__in' => $category_ID,
  //'orderby' => 'rand',ランダムじゃないほうがいいのでコメントアウト。orderbyを省略するとデフォルトの'date'になり最新記事から順に表示される
    );

    $query = new WP_Query($args);
    if( $query -> have_posts() ): while ($query -> have_posts()) : $query -> the_post(); ?>

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


  <?php endwhile; endif; wp_reset_postdata(); ?>



</ul>



</div> <!-- /.relatedposts-container -->
</section>