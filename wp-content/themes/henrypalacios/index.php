<?php get_header(); ?>
<body>
  <header class="header">
    <h1>  <?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description') ?></h2>
  </header>
  <section class="container" role="main">
    <header class="container_header">
      <h4>Últimas Entradas</h4>
    </header>
      <?php rewind_posts(); ?>
      <?php //query_posts('cat=3&order=Asc'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="container__item">
              <header class="datos">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
              </header>
              <figure>
                <?php the_post_thumbnail('thumbnail'); ?>
              </figure>
              <?php the_excerpt(); //Limita la cantidad de palabras del articulo?>
              <footer>
                <strong>  <?php the_author(); ?></strong>
              </footer>
          </article>
      <!-- post -->
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
          <h3>No se encontraron entradas</h3>
      <!-- no posts found -->
      <?php endif; ?>
  </section>

<?php get_footer('landing'); ?>
