<?php get_header() ?>

<section class="contact">
  <div class="container contact__container">    
    <iframe class="contact__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62706.52488045035!2d106.63068421596762!3d10.799223153563014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fef0abe3d7d%3A0x5a8dfb5891860c1d!2zU2h5bmggUHJlbWl1bSBUcuG6p24gUXXhu5FjIFRo4bqjbw!5e0!3m2!1svi!2s!4v1622381090435!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
    <div class="contact__info">
      <div class="contact__info__detail">
        <div class="contact__info__detail-block">
          <h2 class="contact__info__detail-title">Visit the Spa & Beauty</h2>
          <p class="contact__info__detail-info map-icon">www.relaxoy.com</p>
          <p class="contact__info__detail-info web-icon">No 40 Baria Sreet 133/2</p>
        </div>
        <div class="contact__info__detail-block">
          <h2 class="contact__info__detail-title">Message us</h2>
          <p class="contact__info__detail-info email-icon">marie-olson@example.com</p>
          <p class="contact__info__detail-info cellphone-icon">+ (295) 146 8067</p>
        </div>
        <div class="contact__info__detail-block">
          <h2 class="contact__info__detail-title">Opening Hours</h2>
          <p class="contact__info__detail-info time-icon">Mon - Fri: 8:00am - 9:30pm</p>
          <p class="contact__info__detail-info time-icon">Sat - Sun: 9:00am - 10:00pm</p>
        </div>
      </div>
      <form action="" method="POST" class="contact__info__register">
        <div class="contact__info__register__wrapper"><input type="text" class="contact__info__register__input" placeholder="First Name">
        </div>
        <div class="contact__info__register__wrapper"><input type="text" class="contact__info__register__input" placeholder="Last Name">
        </div>
        <div class="contact__info__register__wrapper"><input type="text" class="contact__info__register__input" placeholder="E-mail">
        </div>
        <div class="contact__info__register__wrapper"><input type="text" class="contact__info__register__input" placeholder="Phone Number">
        </div>               
        <div class="contact__info__register__area-wrapper">
        <textarea name="message" id="txtarea" cols="30" rows="5" class="contact__info__register__input area-input" placeholder="Message"></textarea>
        </div>
        <div class="contact__info__register__area-wrapper">
        <input type="submit" value="SEND MESSAGE" class="contact__info__register__submit">
        </div>
      </form>
    </div>   
  </div>
</section>

<?php get_footer() ?>

