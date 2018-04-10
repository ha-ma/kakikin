<?php get_header(); ?>
<main id="main-front" class="main main-category" role="main">
  <div class="content">
    <div class="content-container container">

      <section class="categoryhero categoryhero_others">
        <div class="categoryhero-container">
          <div class="categoryhero-heading">
            <h2>BLOG一覧</h2>
          </div> <!-- /.categoryhero-heading -->
          <div class="categoryhero-content">
            
          </div> <!-- /.categoryhero-content -->
        </div> <!-- /.categoryhero-container -->
      </section> <!-- /.categoryhero -->

      <section class="blog">
        <div class="blog-container">
          <div class="blog-heading">
            <h3>記事一覧</h3>
          </div> <!-- /.blog-heading -->

          <ul class="blog-contents" id="">



            <?php query_posts('posts_per_page=8'); ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
            <?php endwhile; else : ?>


            <p><?php _e( 'Sorry, no blog-posts found.'); ?></p>

          <?php endif; ?>



        </ul>

        <section class="pagenation">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </section>


      </div> <!-- /.blog-container -->
    </section> <!-- /.blog -->








    <?php get_template_part('template/content', 'contactbox') ?>


  </div> <!-- /.container-content -->

</div> <!-- /.content -->
<?php get_footer(); ?>
</main><!-- #main -->






