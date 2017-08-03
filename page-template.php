<?php
/**
Template Name: Interior Template
 */
get_header();
?>
<section class="page-header">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="section-entry section-wrap bg-secondary">
  <div class="container">
    <?php get_template_part( 'template-parts/content', 'interior' ); ?>
  </div><!--/.container-->
</section>

<?php
get_footer();
?>
