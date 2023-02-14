<?php get_header() ?>

  <h1>Page regroupant toutes mes réalisations</h1>

  <?php
  $args = array(
    'post_type' => 'projet',
    'posts_per_page' => -1,
  );

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="project">
        <h2><?php the_title(); ?></h2>
        <div class="project-content">
          <?php the_content(); ?>
          <a href="<?php the_permalink(); ?>">cliquer ici</a>
        </div>
      </div>
    <?php endwhile;
  endif;
  ?>
</div>

<?php get_footer() ?>