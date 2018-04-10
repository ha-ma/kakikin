<section id="member-transition">
  <div class="member-transition-container">

    <div class="member-transition-box cf">

      <?php
      $prevpost = get_adjacent_post(false, '', true); //前の記事
      $nextpost = get_adjacent_post(false, '', false); //次の記事

      if ( $prevpost ) {
        ?>
        <div class="nav-prev nav-box cf">

          <div class="prev-post-avatar" style="background-image: url(<?php echo wp_get_attachment_url( get_field('member_avatar', $prevpost->ID) ); ?>); background-size: cover; background-position: center" ></div>

          <div class="prev-post-info">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/post-arrow-prev.png">
            <p class="prev-post-link"><?php previous_post_link('<strong>%link</strong>'); ?></p>
            <span class="prev-post-link-span"><?php previous_post_link('%link', '前の牧場主'); ?></span>
          </div> <!-- /.prev-post-info -->

        </div> <!-- /.nav-prev -->

        <?php } else{ ?>
        <div class="nav-prev nav-box">
          <div class="prev-post-info">
          </div> <!-- /.prev-post-info -->
        </div> <!-- /.nav-prev -->
        <?php }?>

        <?php
        if( $nextpost ) {
          ?>
          <div class="nav-next nav-box cf">
            <div class="next-post-avatar" style="background-image: url(<?php echo wp_get_attachment_url( get_field('member_avatar', $nextpost->ID) ); ?>); background-size: cover; background-position: center" ></div>

            <div class="next-post-info">
              <img src="<?php bloginfo( 'template_directory' ); ?>/images/post-arrow-next.png">
              <p class="next-post-link"><?php previous_post_link('<strong>%link</strong>'); ?></p>
              <span class="next-post-link-span"><?php next_post_link('%link', '次の農場主'); ?></span>
            </div> <!-- /.next-post-info -->

          </div> <!-- /.nav-next -->

          <?php } else{ ?>
          <div class="nav-next nav-box">
            <div class="next-post-info">
            </div> <!-- /.next-post-info -->
          </div> <!-- /.nav-next -->

          <?php }?>

        </div> <!-- /.member-transition-box -->

      </div> <!-- /.member-transition-container -->
</section> <!-- /.member-transition -->