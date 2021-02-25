<?php
/*
*Template Name: About us page template
*/
?>
<?php if(is_page(25)) { get_header('about'); } else { get_header(); } wp_head(); ?>
 <!--introduction-->
 <section class="introduction">

<div class="container">
  <article class="intro">
    <h2> Trust us we are engineers</h2>
    <div class="introText">
      <span>W</span>
      <p>e bet you hear this saying many times before, but now
        is realy exiting from the mouth of real enginers with many years of expirience
        and whish is most important you can really trust</p>
    </div>
    <p><br>Lorem ipsum dolor sit amet, consectetur adipisicing
      elit. Consequuntur at possimus hic molestiae. Reiciendis adipisci sit tenetur libero quas, illum, accusamus
      ratione eos ad dignissimos. Illo cum et modi atque sapiente, ipsa perspiciatis. Esse doloribus quis iure,
      vero
      sed? Soluta laborum est quae fugit labore itaque fuga iste eum qui veritatis reiciendis modi voluptatem,
      ullam
      sit quisquam, cum. Esse omnis impedit nemo modi cupiditate incidunt ab dolorum odit consequatur. Delectus
      iure
      minus velit eveniet quae suscipit hic quam ab soluta inventore natus ipsum illum veritatis ipsa sapiente,
      explicabo assumenda corrupti optio, totam dolore corporis. Accusantium distinctio voluptas laboriosam
      praesentium quas?</p>

  </article>
  <article class="intro-img">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-engineers.jpg" alt="">
  </article>
</div>
</section>

<section class="principles">
<div class="container">
<h2>Our guiding principles</h2>
<p>Our operating principles define how we do business. They drive our thinking, actions, processes and benchmarks.
  <br>They keep us focused and remind us that we are committed to progress, but not at all costs.
</p>
</div>
</section>

<!--Values-->
<section class="values">
<div class="container">
  <article>
    <h3>Our <br class="bk">Company <br class="bk">Values</h3>
  </article>
  <div class="value">
    <article>
      <i class="fas fa-users"></i>
      <h4>Collaboration</h4>
      <p>Be one team</p>
    </article>
    <article>
      <i class="fas fa-rocket"></i>
      <h4>Innovation</h4>
      <p>Be challenging in our approach</p>
    </article>
    <article>
      <i class="fas fa-book-reader"></i>
      <h4>Respect</h4>
      <p>Be dedicated to relationships </p>
    </article>
    <article>
      <i class="far fa-thumbs-up"></i>
      <h4>Trust</h4>
      <p>Be open and transparent</p>
    </article>
  </div>
</div>
</section>
<?php get_footer(); ?>