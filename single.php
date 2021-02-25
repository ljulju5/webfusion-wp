
<?php get_header(); ?>
  <section class="single">

    <div class="container">
      <main>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article class="post">
          <div class="featured-image">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="text">
            <h4><?php the_author(); ?> | <span><?php echo get_the_date( 'F j, Y'); ?></span></h4>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>            
          </div>
        </article>

      <?php endwhile; else: ?>
        <?php _e( 'No posts yet'); ?>;
      <?php endif; ?>
     
      </main>
      <aside class="sidebar">
          <?php get_sidebar(); ?>

      
      </aside>
    </div>
  </section>
<?php get_footer(); ?>