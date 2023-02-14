<?php get_header() ?>

<h2>Retrouvez ici mon projet 3</h2>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?= the_title(); ?>	</h1>

<?php endwhile; endif; ?>
    
<?php get_footer() ?>