<?php get_header(); ?>


<!-- Logo -->
<section>
  <div class="logo">
    <img src="<?php bloginfo('template_directory');?>/images/hexagon-turquoise.png" class="hexagon" alt="hexagon" />
    <img src="<?php bloginfo('template_directory');?>/images/hexagon-light.png" class="hexagon" alt="hexagon" />
    <img src="<?php bloginfo('template_directory');?>/images/hexagon-dark.png" class="hexagon" alt="hexagon" />
  </div>

  <img src="<?php bloginfo('template_directory');?>/images/line-turquoise.png" class="line layer-1 line-bottom" alt="line" />
  <img src="<?php bloginfo('template_directory');?>/images/line-light.png" class="line layer-2 line-bottom" alt="line" />
  <img src="<?php bloginfo('template_directory');?>/images/line-dark.png" class="line layer-3 line-bottom" alt="line" />
</section>


<!-- Projects -->
<section>

  <!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="blog-post">
  	      <h2 class="blog-post-title"><?php the_title(); ?></h2>
        </div>
      <?php endwhile; ?>
    <?php endif; ?> -->

</section>



<!-- Info -->
<section>
  <img src="<?php bloginfo('template_directory');?>/images/line-turquoise.png" class="line layer-4 line-top" alt="line" />
  <img src="<?php bloginfo('template_directory');?>/images/line-light.png" class="line layer-5 line-top" alt="line" />
  <img src="<?php bloginfo('template_directory');?>/images/line-dark.png" class="line layer-6 line-top" alt="line" />

</section>

<?php get_footer(); ?>
