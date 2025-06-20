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
endif;
wp_reset_postdata();
