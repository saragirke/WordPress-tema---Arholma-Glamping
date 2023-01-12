<?php
get_header();
?>
<!-- Hämtar titel för kategori -->
 <h1><?php wp_title(true,'right'); ?></h1>
  <?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
      ?>
      
      <div class="main">
  <div>
    <!-- Utvald bild -->
    <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} ?> </div>

    <div>
        <!-- Inläggens titlar -->
    <h2> <?php the_title(); ?></h2>
        <!-- Förkortat version av inläggen -->
    <section> <?php the_excerpt(); ?> </section>
    <div class="wrap">
        <!-- Knapp med permalönk för att komma till enskild sida -->
    <button onclick="window.location.href='<?php the_permalink(); ?>';">Läs Mer</button>
    </div>
    </div>
    </div>

      <?php
   endwhile;
endif;


?>
    <br><br>
    <br><br>
<?php
get_footer(); 
?>