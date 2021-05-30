<?php get_header(); ?>
<section class="blog">
  <div class="container blog__container">
    <h1><?php the_title() ?></h1>
    <?php the_content(); ?>
  </div>
</section>
<?php get_footer(); ?>