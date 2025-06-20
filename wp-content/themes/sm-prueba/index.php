<?php get_header(); ?>
<div class="banner-principal">
  <div class="swiper-container banner-swiper">
    <div class="swiper-wrapper"></div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<div class="pilars-main-container">
  <p class="pilares-main-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
  <section class="pilars-section">
    <div class="pilars-container">
      <?php
      $pilares = new WP_Query([
        'post_type' => 'pilar',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
      ]);

      if ($pilares->have_posts()) :
        while ($pilares->have_posts()) : $pilares->the_post();
          $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
          ?>
          <div class="pilar-item" style="background-image: url('<?php echo esc_url($image_url); ?>');">
            <div class="pilar-overlay">
              <h3 class="pilar-title"><?php the_title(); ?></h3>
              <div class="pilar-down-section">
                <p class="pilar-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="pilar-btn">
                  Saber más
                  <img class="search-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-row.png" alt="Row">
                </button>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No hay pilares disponibles.</p>';
      endif;
      ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
