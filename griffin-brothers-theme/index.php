<?php
/**
 * Main Template File (Fallback)
 *
 * @package GriffinBrothers
 */

get_header(); ?>

<main style="padding: 120px 0 80px 0; min-height: 60vh;">
  <div class="container">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="section-title"><?php the_title(); ?></h1>
          </header>
          <div class="entry-content" style="color: var(--text-muted); line-height: 1.8; margin-top: 24px;">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile;
    else : ?>
      <p><?php esc_html_e( 'No content found.', 'griffin-brothers' ); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
