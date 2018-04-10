

<ul class="bxslider bxslider2" id="">


  <?php 
  $posts = get_posts(array(
    'posts_per_page' => 8, // 表示件数
    'category' => 3 // カテゴリIDもしくはスラッグ名
  ));
  ?>

  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    <li class="bxslider-slide">
      <div class="news-item">
        <div class="news-item-left" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
        </div>
        <div class="news-item-right">
          <p><?php the_time('Y/m/d') ?></p>
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
          <a class="btn-solid" href="<?php the_permalink() ?>">続きを見る</a>
        </div>

      </div> <!-- /.news -->
    </li>
  <?php endforeach; endif; wp_reset_postdata(); ?>
  


</ul>




