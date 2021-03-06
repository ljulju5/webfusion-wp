<?php
/*
*Template Name: Basic Page Template
*/


;?>
<?php get_header(); ?>




	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<section class="contact">
      <?php the_content(); ?>
  </section>
      
      
       <section class="map">


    <div class="column container">
      <h2>Find us on map</h2>
      <div class="contact-region">


       <?php if(is_active_sidebar('adress')) :?>
       <?php dynamic_sidebar('adress'); ?>
       <?php endif; ?>
       
        
        <?php if(is_active_sidebar('email')) :?>
       <?php dynamic_sidebar('email'); ?>
       <?php endif; ?>
       
       
       

        <iframe class="contact-map" width="700" height="450" frameborder="0" scrolling="no" marginheight="0"
          marginwidth="0"
          src="https://www.openstreetmap.org/export/embed.html?bbox=20.442702770233158%2C44.78268794672401%2C20.453431606292728%2C44.78993711624715&amp;layer=mapnik&amp;marker=44.786312645280894%2C20.44806718826294"
          style="border: 1px solid black"></iframe>


      </div>
    </div>
  </section>

      <?php endwhile; else: ?>
        <?php _e( 'Nema dodatih stranica'); ?>;
      <?php endif; ?>
     
	 












<?php get_footer(); ?>