<?php get_header(); ?>
<main id="main-front" class="main main-front" role="main">
  <div class="content">
    <div class="content-container container">

      <?php get_template_part('template/content', 'fronthero') ?>

      <?php get_template_part('template/content', 'frontcategory') ?>


      <?php get_template_part('template/content', 'blog') ?>

      <?php get_template_part('template/content', 'middlemenu') ?>


      <?php get_template_part('template/content', 'contactbox') ?>

      <?php get_template_part('template/content', 'sns') ?>




    </div> <!-- /.container-content -->

  </div> <!-- /.content -->
  <?php get_footer(); ?>
</main><!-- #main -->






