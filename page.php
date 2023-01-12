<?php
get_header();
?>

<div class="grid-container">
  <div>
    <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } ?> 
</div>
<div>
    <section> 
  <?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
?>
</section>
</div>
</div>

<?php
get_footer(); 
?>

