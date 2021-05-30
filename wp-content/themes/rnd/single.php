<?php get_header(); ?>
<section class="blog">
  <div class="container blog__container">
    <h1 class="blog__title  h2 maintit"><?php the_title() ?></h1>
    <div class="blog__content">
    <?php the_content(); ?>
    </div>
    
  </div>
</section>
<?php get_footer(); ?>

