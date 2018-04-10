<?php get_header(); ?>

<main id="page" class="main main-page" role="main">
  <div class="container page-container">


    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
      <section class="page-header page-section" style="background-image: url(
      <?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">

        <div class="page-header-container">
          <div class="page-header-wrapper">
            <h1 class="page-header-title"><?php the_title(); ?></h1>
          </div> <!--/.page-header-wrapper -->
        </div> <!--/.page-header-container -->

      </section> <!-- /.page-header -->

      <section class="page-content">
        <div class="page-content-container">
          <?php the_content(); ?>
        </div> <!-- /.page-content-container -->
      </section> <!-- /.page-content -->

    <?php endwhile; else : ?>

    <div class="no-content">
      <h2>お探しのコンテンツが見つかりませんでした。</h2>
    </div> <!-- /.no-content -->

  <?php endif; ?>


<?php get_template_part('template/content', 'contactbox') ?>

<?php get_template_part('template/content', 'sns') ?>


<?php get_footer(); ?>



</div> <!-- /.page-container -->


</main><!-- /.main-page -->

