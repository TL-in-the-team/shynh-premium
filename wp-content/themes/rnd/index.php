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
      <p class="welcome__desc">Welcome to SHYNH PREMIUM. When you walk through our doors, you will immediately feel a sense of relaxation. Soothing colors, soft music and lovely aromas transport you to a place of peace and serenity. Customers will enjoy a 5-star-class relaxation space as well as excellent services at SHYNH PREMIUM.  Proud to be a top 1 beauty clinic leading high-tech beauty trend nowadays, honored to accompany millions of women in the beauty journey.</p>
      <div class="welcome__slider-showcase-wrapper">
        <div id="xxxwelcome__carousel" class="welcome__slider">
          <div class="welcome__item">
            <div class="welcome__item__wrapper">
              <img src="<?php echo get_theme_file_uri('/images/wslider1.webp') ?>" alt="alt" title="title" class="welcome__item__img">
              <h3 class="welcome__item__desc">DA NANG CITY</h3>
            </div>
          </div>   
          <!-- <div class="welcome__item">
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
          </div>    -->
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
  </div>
</section>
<section class="our-services">
  <div class="container">
    <h2 class="our-services__title">OUR SERVICES</h2>
    <div class="our-services__wrapper">
      <div class="our-services__block">
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage0.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Skin care & Treatment</p>
        </a>
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage1.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Jaw Contouring & Skin Rejuvenation</p>
        </a>
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage2.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Lose Weight</p>
        </a>
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage3.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">White Bath</p>
        </a>
      </div>
      <div class="our-services__middle-block">
        <img src="<?php echo get_theme_file_uri('/images/centerimg.webp') ?>" alt="ALT" title="title" class="our-services__middle-block__img">
      </div>
      <div class="our-services__block">
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder" >
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage5.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Hair Salon</p>
        </a>
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage6.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Tattoo</p>
        </a>
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage7.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Body Relaxing Massage</p>
        </a>
        <a href="#" class="our-services__item">
          <div class="our-services__item__img-holder">
            <div class="our-services__item__img" style="background-image: url('<?php echo get_theme_file_uri('/images/oImage8.png') ?>');"></div>            
          </div>
          <p class="our-services__item__title">Other services</p>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="enjoy-difference">
  <h2 class="enjoy-difference__title">ENJOY THE DIFFERENCE</h2>
  <div id="enjoy-difference__slider" class="enjoy-difference__slider owl-carousel owl-theme">
    <div class="enjoy-difference__item">
      <a href="#" class="enjoy-difference__item__link">
        <img src="<?php echo get_theme_file_uri('/images/etd1.webp') ?>" alt="ALT" title="title" class="enjoy-difference__item__img">
      </a>
    </div>
    <div class="enjoy-difference__item">
      <a href="#" class="enjoy-difference__item__link">
        <img src="<?php echo get_theme_file_uri('/images/etd2.webp') ?>" alt="ALT" title="title" class="enjoy-difference__item__img">
      </a>
    </div>
    <div class="enjoy-difference__item">
      <a href="#" class="enjoy-difference__item__link">
        <img src="<?php echo get_theme_file_uri('/images/etd3.webp') ?>" alt="ALT" title="title" class="enjoy-difference__item__img">
      </a>
    </div>
    <div class="enjoy-difference__item">
      <a href="#" class="enjoy-difference__item__link">
        <img src="<?php echo get_theme_file_uri('/images/etd3.webp') ?>" alt="ALT" title="title" class="enjoy-difference__item__img">
      </a>
    </div>
  </div>
</section>
<section class="ambassador">
  <div class="container">
    <div id="ambassador__slider" class="ambassador__slider owl-carousel owl-theme">
      <div class="ambassador__item">
        <div class="ambassador__item__img-holder">
          <picture class="ambassador__item__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('/images/leQuyen.webp') ?>"/>
            <img alt="A lazy image" title="Title" class="lazy" src="<?php echo get_theme_file_uri('/images/mlequyen.webp') ?>" />
          </picture>
        </div>
        <div class="ambassador__item__info">
          <p class="ambassador__item__info__quote">Quyen always tries to keep her radiant and flawless appearance to look perfect in public. Which is why Quyen chooses Shynh Premium to keep her skin smooth, healthy, white, as well as maintain her slim figure. Shynh Premium is the second home that helps Quyen retain her youth and shine at any time.</p>
          <h2 class="ambassador__item__info__name">Lệ Quyên</h2>
          <span class="ambassador__item__info__title">Singer</span>
        </div>
      </div>
      <div class="ambassador__item">
        <div class="ambassador__item__img-holder">
          <picture class="ambassador__item__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('/images/leQuyen.webp') ?>"/>
            <img alt="A lazy image" title="Title" class="lazy" src="<?php echo get_theme_file_uri('/images/mlequyen.webp') ?>" />
          </picture>
        </div>
        <div class="ambassador__item__info">
          <p class="ambassador__item__info__quote">Quyen always tries to keep her radiant and flawless appearance to look perfect in public. Which is why Quyen chooses Shynh Premium to keep her skin smooth, healthy, white, as well as maintain her slim figure. Shynh Premium is the second home that helps Quyen retain her youth and shine at any time.</p>
          <h2 class="ambassador__item__info__name">Lệ Quyên</h2>
          <span class="ambassador__item__info__title">Singer</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="height:1000px" class="temp"></section>

<?php get_footer() ?>