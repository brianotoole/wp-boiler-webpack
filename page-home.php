<?php
/**
Template Name: Homepage
 */
get_header();
?>
<section class="hero page-header vertical-center">
  <div class="container-fluid">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
        <h1 class="page-title" id="js-header-scroll-to">Hero Title</h1>
        <h3 class="sub-title text-white">hero subtitle here</h3>
        <a href="#" class="btn white">button-white</a>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="section-wrap home-intro bg-white">
  <div class="container-fluid">
    <h3 class="section-heading">Section Heading</h3>
    <div class="row center-xs">
      <div class="col-xs-12 col-md-5">
        <img src="https://pinch.works/images/common-illustration-d836eff2.png">
      </div><!--/.col-->
      <div class="col-xs-12 col-md-5 text-left">
        <h5>Heading Here</h5>
        <p>em Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div><!--/.col-->
    </div><!--/.row-->
    <hr />
    <div class="row center-xs">
      <div class="col-xs-12 col-md-5 text-left">
        <h5>Heading Here</h5>
        <p>em Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div><!--/.col-->
      <div class="col-xs-12 col-md-5">
        <img src="https://pinch.works/images/branches-illustration-052dfed1.png">
      </div><!--/.col-->
    </div><!--/.row-->
    <hr />
    <div class="row center-xs">
      <div class="col-xs-12 col-md-5">
        <img src="https://pinch.works/images/channels-illustration-4a75cfb4.png">
      </div><!--/.col-->
      <div class="col-xs-12 col-md-5 text-left">
        <h5>Heading Here</h5>
        <p>em Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section>

<section class="section-cta bg-primary text-white">
  <div class="row vertical-center text-center">
    <div class="col-xs-12">
      <h3 class="cta-title">CTA section title</h3>
      <a href="#" class="btn white">CTA button</a>
    </div><!--/.col-->
  </div><!--/.row-->
</section>

<?php // start loop
  while ( have_posts() ) : the_post(); ?>
  <!--get posts-->
<?php endwhile; // End loop ?>


<?php
//get_sidebar();
get_footer();
?>
