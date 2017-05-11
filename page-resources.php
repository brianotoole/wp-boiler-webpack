<?php
/**
Template Name: Resources
 */
get_header();
?>
<section class="page-header">
  <div class="container-fluid">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="section-entry section-wrap bg-secondary">
  <div class="col-xs-12">
    <div class="filter-title">
      <h6>Select From Resources Below to Filter</h6>
      <div class="filter-border-bottom no-pad"></div>
    </div><!--/.filter-title-->
    <ul class="row center-xs filters">
      <li><a>Filter</a></li>
      <li><a>Filter</a></li>
      <li><a>Filter</a></li>
      <li><a>Filter</a></li>
      <li><a>Filter</a></li>
    </ul><!--/.filters-->
  </div><!--/.col-->
  <div class="container">
    <?php get_template_part( 'template-parts/content', 'resources' ); ?>
  </div><!--/.container-->
</section>


<?php
//get_sidebar();
get_footer();
?>
