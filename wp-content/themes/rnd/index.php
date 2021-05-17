<?php get_header() ?>

<section class="main-slider">  
  <div id="main-slider__carousel" class="main-slider__wrapper owl-carousel owl-theme">
    <div href="#" class="main-slider__item">
      <picture class="main-slider__item__img-wrapper">
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('/images/slider1.webp') ?>"/>
        <img alt="A lazy image" title="Title" class="lazy" src="<?php echo get_theme_file_uri('/images/mslider1.webp') ?>" />
      </picture>
      <div class="main-slider__item__info">
        <h1 class="main-slider__item__heading">SHYNH PREMIUM</h1>
        <h3 class="main-slider__item__title">A High-Tech Spa & Beauty Clinic</h3>
        <p class="main-slider__item__desc">with the mission of bringing customers the highest quality beauty experience.</p>
        <a href="#" class="main-slider__item__book-now">Book Now</a>
      </div>
    </div>
    <div href="#" class="main-slider__item">
      <picture class="main-slider__item__img-wrapper">
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('/images/slider2.webp') ?>"/>
        <img alt="A lazy image" title="Title" class="lazy" src="<?php echo get_theme_file_uri('/images/mslider2.webp') ?>" />
      </picture>
      <div class="main-slider__item__info">
        <h1 class="main-slider__item__heading">SHYNH PREMIUM</h1>
        <h3 class="main-slider__item__title">A High-Tech Spa & Beauty Clinic</h3>
        <p class="main-slider__item__desc">with the mission of bringing customers the highest quality beauty experience.</p>
        <a href="#" class="main-slider__item__book-now">Book Now</a>
      </div>
    </div>
    <div href="#" class="main-slider__item">
      <picture class="main-slider__item__img-wrapper">
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('/images/slider3.webp') ?>"/>
        <img alt="A lazy image" title="Title" class="lazy" src="<?php echo get_theme_file_uri('/images/mslider3.webp') ?>" />
      </picture>
      <div class="main-slider__item__info">
        <h1 class="main-slider__item__heading">SHYNH PREMIUM</h1>
        <h3 class="main-slider__item__title">A High-Tech Spa & Beauty Clinic</h3>
        <p class="main-slider__item__desc">with the mission of bringing customers the highest quality beauty experience.</p>
        <a href="#" class="main-slider__item__book-now">Book Now</a>
      </div>
    </div>
  </div> 
</section>

<section class="welcome">
  <div class="container">
    <div class="welcome__wrapper">    
      <h2 class="welcome__title">WELCOME</h2>
      <p class="welcome__desc">Welcome to SHYNH PREMIUM. When you walk through our doors, you will immediately feel a sense of relaxation. Soothing colors, soft music and lovely aromas transport you to a place of peace and serenity. Customers will enjoy a 5-star-class relaxation space as well as excellent services at SHYNH PREMIUM.</p>
      <div id="welcome__carousel" class="welcome__slider owl-carousel owl-theme">
        <div class="welcome__item">
          <div class="welcome__item__wrapper">
            <img src="<?php echo get_theme_file_uri('/images/wslider1.webp') ?>" alt="alt" title="title" class="welcome__item__img">
            <h3 class="welcome__item__desc">DA NANG CITY</h3>
          </div>
        </div>   
        <div class="welcome__item">
          <div class="welcome__item__wrapper">
            <img src="<?php echo get_theme_file_uri('/images/wslider2.webp') ?>" alt="alt" title="title" class="welcome__item__img">
            <h3 class="welcome__item__desc">DA NANG CITY</h3>
          </div>
        </div>   
        <div class="welcome__item">
          <div class="welcome__item__wrapper">
            <img src="<?php echo get_theme_file_uri('/images/wslider3.webp') ?>" alt="alt" title="title" class="welcome__item__img">
            <h3 class="welcome__item__desc">DA NANG CITY</h3>
          </div>
        </div>   
      </div>
      <div class="welcome__showcase">
          <span class="welcome__showcase__item">
            <span class="welcome__showcase__item-header">5</span>
            Branches in Ho Chi Minh, Hanoi, and Da Nang
          </span>
          <span class="welcome__showcase__item">
            <span class="welcome__showcase__item-header">100+ </span>
            Treatments
          </span>
          <span class="welcome__showcase__item">
            <span class="welcome__showcase__item-header">1.000.000 + </span>
            Clients per year
          </span>
        </div>
    </div>
  </div>
</section>

<section style="height:1000px" class="temp"></section>

<?php get_footer() ?>