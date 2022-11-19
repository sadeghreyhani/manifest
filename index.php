<?php get_header(); ?>
    
   <article class="o-grid">
   <?php
    if(have_posts()){
      while(have_posts()) {
        the_post();
        get_template_part('template-parts/content' , 'archive');
      }
    }
   ?>

   </article>
   <div class = "c-archive__post-pagination"><?php the_posts_pagination(); ?></div>
<?php get_footer(); ?>