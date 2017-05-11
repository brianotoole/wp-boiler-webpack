<?php
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <?php
          while ( have_posts() ) : the_post();
          get_template_part( 'content', 'resources' ); 
        	endwhile;
        ?>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section>


<?php
//get_sidebar();
get_footer();
?>
