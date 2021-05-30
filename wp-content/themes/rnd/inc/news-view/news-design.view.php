



<section class="news-news">
  <div class="container news-news__container">
    <h1 class="news-news__title">NEWS</h1>
    <div class="news-news__list">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
      <div class="news-news__item">
        <img src="<?php echo get_the_post_thumbnail_url(the_post()->ID,'') ?>" alt="ALT" title="title" class="news-news__item__img">
        <h2 class="news-news__item__title"><?php the_title() ;?></h2>
        <a href="<?php the_permalink();?>" class="news-news__item__more-btn">MORE DETAIL</a>
      </div>
      <?php
      endwhile; endif;
      ?>
    </div>
  </div>
</section>