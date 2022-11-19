<?php get_header(); ?>
    
   <!-- <article class="o-wrapper"> -->
   <section class="c-page-header">
<div class="o-wrapper">
    <div class="o-col">
      <h1 class="c-page-header__title">
        Manifest is a newborn theme.<br>, simple and fast.       
      </h1>
  </div>
</div>
</section>
</div>
<section  class="c-slider">
<div  class="js-carousel">
<div class="c-slider__slide">
  <a href="#">
    <div class="c-slider__slide__image">
      <img class="c-slider__image" src="https://picsum.photos/id/1076/500/500" alt="">
      <h3 class="c-slider__title">Redesigning Drop Box</h3>
    </div>
    
  </a>
</div>
<div class="c-slider__slide">
  <a href="#">
    <div class="c-slider__slide__image"><img class="c-slider__image" src="https://picsum.photos/id/1081/500/500" alt=""></div>
    <h3 class="c-slider__title">Dreamy</h3>
  </a>
</div>
<div class="c-slider__main">
  <a href="#">
    <div class="c-slider__slide__image"><img class="c-slider__image" src="https://picsum.photos/id/503/500/500" alt=""></div>
    <h3 class="c-slider__title">Car Sharing App</h3>
  </a>
</div>
<div class="c-slider__slide">
  <a href="#">
    <div class="c-slider__slide__image"><img class="c-slider__image" src="https://picsum.photos/id/520/500/500" alt=""></div>
    <h3 class="c-slider__title">Ai Fashion Platform</h3>
  </a>
</div>
<div class="c-slider__slide">
  <a href="#">
    <div class="c-slider__slide__image"><img class="c-slider__image" src="https://picsum.photos/id/524/500/500" alt=""></div>
    <h3 class="c-slider__title">Mixkit Inspo</h3>
  </a>
</div>
</div>
</section>
<section class="c-info">
<div class="o-wrapper">
<div class="c-info__main">
<div class="c-info__main__title">
  <h2>Full-time UI/UX designer Head of Design at VeronaLabs.com</h2>
    <a class="c-info__content" href="">
      <span class="c-info__text-link">Read More</span>
      <i class="c-info__icon fa-solid fa-arrow-right"></i>
    </a>
</div>
<div class="c-info__main--p">
  <p>We work with clients around the world from headquarters in Charleston, South Carolina.<br><br>
    We focus on naming, branding, brand narratives, website design and development, and brand experiences.</p>
</div>
</div>
</div>
</section>
<section class="c-posts">
<div class="o-wrapper">
<div class="c-posts__header">
<h2 class="c-posts__header__title">Latest Posts</h2>
<a class="c-posts__header__link" href="#">View All  <i class="c-posts__header__icon fa-solid fa-arrow-right"></i> </a>
</div>
<div class="c-posts__content">
<div class="c-post">
  <article class="c-post__main">
    <div class="c-post__main__image"><a href="#"><img src="https://picsum.photos/id/1048/350/250" alt=""></a></div>
    <div class="c-post__main__category-time">
      <a class="c-post__main__category" href="#">Interface Design</a>
      <p class="c-post__main__time">
        <time datetime="2022-010-30T19:00">30 octobre, 2022</time>
      </p>
    </div>
    <div class="c-post__main__title"><h3><a href="#"> UX traffic light colours</a></h3></div>
    <div class="c-post__main__description">UI has to make a huge visual difference between warning, an alert and a success.</div>
  </article>
  <article class="c-post__main">
    <div class="c-post__main__image"><a href="#"><img src="https://picsum.photos/id/1075/350/250" alt=""></a></div>
    <div class="c-post__main__category-time">
      <a class="c-post__main__category" href="#">Technology</a>
      <p class="c-post__main__time">
        <time datetime="2022-010-2T10:00">2 may, 2022</time>
      </p>
    </div>
    <div class="c-post__main__title"><h3><a href="#">Using UX Design to Build</a></h3></div>
    <div class="c-post__main__description">Transformation has to be driven by everybody, not just by climate groups.</div>
  </article>
  <article class="c-post__main">
    <div class="c-post__main__image"><a href="#"><img src="https://picsum.photos/id/1031/350/250" alt=""></a></div>
    <div class="c-post__main__category-time">
      <a class="c-post__main__category" href="#">Creativity vs. UX</a>
      <p class="c-post__main__time">
        <time datetime="2022-010-23T15:00">23 november, 2022</time>
      </p>
    </div>
    <div class="c-post__main__title"><h3><a href="#">UX traffic light colours</a></h3></div>
    <div class="c-post__main__description">Is it possible to create a delightful user experience without following best UX practices?</div>
  <!-- </article>     -->
</div>
</div>
</section>
   <?php
    if(have_posts()){
      while(have_posts()) {
        the_post();
        the_content();
      }
    }
   ?>

   </article>

<?php get_footer(); ?>