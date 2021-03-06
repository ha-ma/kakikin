<section class="blog">
  <div class="blog-container">
    <div class="blog-heading">
      <h3><?php single_cat_title(); ?>に関する記事一覧</h3>
    </div> <!-- /.blog-heading -->

    <ul class="blog-contents" id="">



      <?php if(have_posts()): while(have_posts()):the_post(); ?>

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
      <?php endwhile; endif; ?>



    </ul>

  </div> <!-- /.blog-container -->
</section> <!-- /.blog -->




