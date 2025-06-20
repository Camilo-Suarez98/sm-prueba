<?php get_header(); ?>
<div class="banner-principal">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <!-- Aquí deberías poner las slides dinámicas desde la API -->
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<div class="pilares-main-container">
  <p class="pilares-main-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
  <div class="pilares">
    <?php
  $query = new WP_Query([
    'post_type' => 'pilar',
    'posts_per_page' => -1
  ]);
  
  if ($query->have_posts()) :
    echo '<div class="pilares-container">';
    while ($query->have_posts()) : $query->the_post();
    ?>
      <div class="pilar-card">
        <?php the_post_thumbnail('medium'); ?>
        <h3><?php the_title(); ?></h3>
      </div>
      <?php
    endwhile;
    echo '</div>';
    else :
      echo '<p>No hay pilares aún.</p>';
    endif;
    wp_reset_postdata();
    ?>
  </div>
</div>

<?php get_footer(); ?>
