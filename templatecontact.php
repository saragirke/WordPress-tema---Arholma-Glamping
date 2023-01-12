<?php /* Template Name: Single-column */ ?>

<?php get_header(); ?>

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();?>
      <h1> <?php the_title(); ?> </h1>
      <div class="contact">

      <?php
      the_content();
    if ( has_post_thumbnail() ) {
         the_post_thumbnail();
     }
   endwhile;
endif;
?>
</div>
<?php get_footer(); ?>