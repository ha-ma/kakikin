<?php get_header(); ?>
<main id="main-front" class="main main-category" role="main">
  <div class="content">
    <div class="content-container container">

      <?php if (is_category('studyabroad')) : ?>
        <?php get_template_part('template/category', 'studyabroad') ?>
      <?php elseif (is_category('workingholiday')) : ?>
        <?php get_template_part('template/category', 'workingholiday') ?>
      <?php elseif (is_category('prep')) : ?>
        <?php get_template_part('template/category', 'prep') ?>
      <?php elseif (is_category('event')) : ?>
        <?php get_template_part('template/category', 'event') ?>
      <?php elseif (is_category('travel')) : ?>
        <?php get_template_part('template/category', 'travel') ?>
      <?php else : ?>
        <?php get_template_part('template/category', 'others') ?>
      <?php endif; ?>


      <?php get_template_part('template/category', 'blog') ?>



      <?php get_template_part('template/content', 'contactbox') ?>


    </div> <!-- /.container-content -->

  </div> <!-- /.content -->
  <?php get_footer(); ?>
</main><!-- #main -->






