<?php
extract($args);
if( have_rows('detail_expert',$postdata->ID) ):
?>

<section class="detail-expert">
  <div class="container detail-expert__container">
    <div id="detail-experts_carousel" class="detail-expert__list owl-carousel owl-theme">
      <?php
        while( have_rows('detail_expert',$postdata->ID) ) : the_row();
        $image = get_sub_field('image');                
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $size = 'medium';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
        $m_image = get_sub_field('image_mobile');                
        $m_url = $image['url'];
        $m_title = $image['title'];
        $m_alt = $image['alt'];
        $m_size = 'medium';
        $m_thumb = $image['sizes'][ $size ];
        $m_width = $image['sizes'][ $size . '-width' ];
        $m_height = $image['sizes'][ $size . '-height' ];
        $desc = get_sub_field('description');
        $name = get_sub_field('name');
        $position = get_sub_field('position');
      ?>
      <div class="detail-expert__item">
        <picture class="detail-expert__item__img mxHeight">          
          <source media="(min-width:767px)" src="<?php echo imageEncodeURL($url);?>" title="<?php echo $title ?>" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>">
          <img src="<?php echo imageEncodeURL($m_url);?>" title="<?php echo $m_title ?>" alt="<?php echo $m_alt ?>" width="<?php echo $m_width ?>" height="<?php echo $m_height ?>">
        </picture>
        <div class="detail-expert__item__info mxHeight">
          <div class="detail-expert__item__info__desc"><?php echo $desc ?></div>
          <span class="detail-expert__item__info__name"><?php echo $name ?></span>
          <span class="detail-expert__item__info__position"><?php echo $position ?></span>
        </div>
      </div>
      <?php
        endwhile;
      ?>  
    </div>
  </div>
</section>

<?php 
  endif;
?>