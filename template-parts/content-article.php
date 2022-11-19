
  <div class = "c-article" >
   <div class = "c-article__category-link"><?php the_category();?></div>
  <div class="c-article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  <div class="c-article__category-time">
        <p class = "c-article__comments-number"><?php comments_number();?></p>
        <p class="c-article__time"><time class = "datetime"> <?php the_date(); ?></time></p>
      </div>
    <div class = "c-article__image"> <img class = "c-article__tumbnail" src=" <?php the_post_thumbnail_url( 'large' );?> " alt=""> </div>  
    <div class = "c-article_content"><?php the_content();?></div>
</div>
<?php 
comments_template();
 ?>
