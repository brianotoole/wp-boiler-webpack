<?php
  $args = array(
    'post_type' => '',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :

// get cat name

?>



<div class="row resources">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <div class="col-xs-12 col-sm-4">
    <article class="card" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <div class="card-header">
      </div><!--/.card-header-->
      <div class="card-body">
        <div class="cat-name"><?php the_category('<a>'); ?></div>
        <h5 class="card-title"><a class="no-underline" href="#"><?php the_title(); ?></a></h5>
        <div class="dl"><a href="#">Download Article</a></div>
      </div><!--/.card-body-->
    </article><!--/.card-->
  </div><!--/.col-->

<?php endwhile; ?>
</div><!--/.row-->
<?php endif; ?>
