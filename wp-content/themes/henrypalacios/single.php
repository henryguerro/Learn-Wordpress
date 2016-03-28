<?php get_header(); ?>
  <body>
    <?php rewind_posts(); ?>
    <?php //query_posts('cat=3&order=Asc'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <header class="header">
        <h1> <?php the_title(); ?> </h1>
        <h4> <a href="<?php bloginfo('url'); ?>"> Volver a Home... </a> </h4>
      </header>
      <article class="container__item">
          <header class="datos">

          </header>
          <figure>
            <?php the_post_thumbnail('thumbnail'); ?>
          </figure>
          <?php the_excerpt(); //Limita la cantidad de palabras del articulo?>
          <footer>
            <strong><?php the_author(); ?></strong>-<small><?php the_date(); ?></small>
          </footer>
      </article>
    <!-- post -->
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
        <h3>No se encontraron entradas</h3>
    <!-- no posts found -->
    <?php endif; ?>
<?php get_footer(); ?>
