<?php get_header(); ?>
<?php 
  $term = get_queried_object();
  $design = get_field('design', $term);
  switch($design):
    case 2:
        get_template_part('inc/news-view/blog-design.view');
      break;
    case 1: 
        get_template_part('inc/news-view/news-design.view'); 
      break;
  endswitch;
?>
<?php get_footer(); ?>