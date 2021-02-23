

<?php get_header(); ?>
  <!-- <h2>Blog</h2> -->
  <section class="blog">

    <div class="container">
      <main class="posts">

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article class="post">
          <div class="featured-image">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="text">
            <h4><?php the_author(); ?> | <span><?php echo get_the_date( 'F j, Y'); ?></span></h4>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <button><a href="<?php the_permalink(); ?>"><?php _e('Read more'); ?></a></button>
          </div>
        </article>

      <?php endwhile; else: ?>
        <?php _e( 'No posts yet'); ?>;
      <?php endif; ?>
     
      </main>
      <aside class="sidebar">
          <?php get_sidebar(); ?>

        <!-- Tehnologije probno dodate u temu kao custom html, kad napravimo stranice, menjacemo -->

        <!-- <div class="widget">
        <*?php get_sidebar(); ?>

          <ul>            
            <li><a href="">Technologie 1</a></li>
            <li><a href="">Technologie 2</a></li>
            <li><a href="">Technologie 3</a></li>
            <li><a href="">Technologie 4</a></li>
            <li><a href="">Technologie 5</a></li>
          </ul>

        </div> -->
      </aside>
    </div>
  </section>
<?php get_footer(); ?>