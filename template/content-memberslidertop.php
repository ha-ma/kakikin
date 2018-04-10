
<section id="slider2" class="memberslider">
  <div class="section-container container">

    <ul class="bxslider bxslider2" id="">


      <?php 
      $num_posts = ( is_front_page() ) ? -1 : -1;
      $args = array(
        'post_type' => 'member',
        'posts_per_page' => $num_posts
        );
      $query = new WP_Query( $args );
      ?>

      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <li class="bxslider-slide">
          <a href="<?php the_permalink(); ?>"> 
          <div class="member cf">
            <div class="member-left">
              <div class="member-avatar" style="background-image: url(<?php echo wp_get_attachment_url( post_custom('member_avatar') ); ?>); background-size: cover; background-position: center" ></div>
              <div class="member-name">
                <h3><?php echo post_custom( 'member_name' ); ?></h3>
                <p><?php echo post_custom( 'member_desc_short' ); ?></p>
              </div> <!-- /.member -->
            </div>
            
          </div> <!-- /.member -->
          </a>
        </li>
      <?php endwhile; endif; wp_reset_postdata(); ?>


    </ul>



  </div> <!-- /.section-container -->
</section> <!-- /#slider -->

