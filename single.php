<?php get_header(); ?>
<main class="main main-single">
  <div class="single-container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="single-header single-section" style="background-image: url(
      <?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">

      <div class="single-header-container">
        <div class="single-header-wrapper">

          <div class="single-header-category"><?php the_category( ' ' ); ?></div>
          <h1 class="single-header-title"><?php the_title(); ?></h1>
        </div> <!--/.single-header-wrapper -->
      </div> <!--/.single-header-container -->

    </section> <!-- /.single-header -->

    <section class="single-content">
      <div class="single-content-container">
        <div class="single-content-thumbnail single-section" style="">
        <?php 
          if ( has_post_thumbnail() ) { // 
            the_post_thumbnail();
          } 
          ?>
        </div> <!-- /.single-content-thumbnail -->
        <?php the_content(); ?>
      </div> <!-- /.single-content-container -->
    </section> <!-- /.single-content -->

    <section class="single-pagenation">
      <div class="single-pagenation-container">
        <p class="previous-post"><?php previous_post_link(); ?></p>
        <p class="next-post"><?php next_post_link(); ?></p>

      </div> <!-- /.single-pagenation-container -->
    </section> <!-- /.single-pagenation -->

  <?php endwhile; else : ?>
  <section class="no-post">
    <p><?php _e( 'Sorry, No posts here..' ); ?></p>
  </section>
<?php endif; wp_reset_postdata(); ?>

<?php get_template_part('template/posts', 'related') ?>

<?php get_footer(); ?>

</div> <!--/.single-container -->
</main> <!-- /.single-container -->




