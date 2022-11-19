<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel = "shortcut icon" href = "/wp-content/themes/manifest/assets/images/cross-icon.svg" >
    
    <?php wp_head(); ?>

  </head>
  <body>
    <div class="c-main">
    <header class="c-header">
      <div class="o-wrapper">
        <div class="c-header__main">
          <nav class="c-navbar">

            <?php
            if(function_exists('the_custom_logo')){
              $custopm_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custopm_logo_id);
            }
            ?>

            <div class="c-navbar__logo"><a href="http://manifest.local/"><img src="<?php echo $logo[0] ?>" alt="logo"></a></div>

            <img class="c-navbar__search-toggle is-open" src="/wp-content/themes/manifest/assets/images/search_icon.svg" alt="">
            <a href="#" class="c-toggle-button">
              <span class="c-bar"></span>
              <span class="c-bar"></span>
              <span class="c-bar"></span>
            </a>
            <div class="c-navbar-links js-navbar-links">

            <?php 
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '' ,
                'theme_location' => 'primary' ,
                'items_wrap' => '<ul id = "js-nav__active" class = "" >%3$s</ul>'
              )
            );
            ?>

              
            </div> 
          </nav>
            </div>
          </div> 
        </div>
      </div>
    </header>
    <div class="c-search-box js-search-box">
      <img src="/wp-content/themes/manifest/assets/images/cross-icon.svg" class="c-search__icon is-close" alt="">
    <div class="c-search-box__item js-search-box__item">
      <input class="c-search-box__item__input" type="text">
      <button  type="button"><img src="/wp-content/themes/manifest/assets/images/search_icon.svg" alt=""></button>
    </div>
  </div>
   </div>
