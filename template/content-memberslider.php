
<section id="slider2" class="memberslider">
  <div class="section-container container">

    <div class="heading-box memberslider-heading">
      <h2 class="heading-jp">組合員紹介</h2>
    </div> <!-- /.heading-box -->




    <ul class="bxslider bxslider2" id="">


      <?php 
      $num_posts = ( is_front_page() ) ? 8 : -1;
      $args = array(
        'post_type' => 'member',
        'posts_per_page' => $num_posts
        );
      $query = new WP_Query( $args );
      ?>

      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <li class="bxslider-slide">
          <div class="member cf">
            <div class="member-left">
              <div class="member-avatar" style="background-image: url(<?php echo wp_get_attachment_url( get_field('member_avatar') ); ?>); background-size: cover; background-position: center" ></div>
              <div class="member-name">
                <p><?php echo post_custom( 'member_short_bg' ); ?></p>
                <h3><?php echo post_custom( 'member_name' ); ?></h3>
              </div>
            </div>
            <div class="member-right">
              <div class="member-desc">
                <div class="member-intro">
                  <p><?php echo post_custom( 'member_basic_info' ); ?></p>
                </div>
              </div>
            </div>
          </div> <!-- /.member -->
        </li>
      <?php endwhile; endif; wp_reset_postdata(); ?>


    </ul>


    <div class="btn-box">
      <a href="<?php bloginfo( 'url' ); ?>/member" class="btn-belt memberslider-btn">組合員一覧</a>
    </div>

  </div> <!-- /.section-container -->
</section> <!-- /#slider -->

