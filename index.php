<?php /* Template Name: Two-Columns */ ?>

<?php
get_header();?>
<h1><?php wp_title(true,'right'); ?></h1><?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
      ?>
      <div class="content">
       
<div>
    <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail( 'medium_large' );
}?>   
</div>
<div  class="divtext">
<section>
      <?php
      the_content();
?>
 </section>
</div>
</div>
<?php
endwhile;
endif;
?>

<!-- Widget area puffen -->
<div id="puff">
<?php if ( is_active_sidebar( 'puffen' ) ) : ?>
		<?php dynamic_sidebar( 'puffen' ); ?>
	</div>

<?php endif; ?>

<?php
get_footer(); 
?>