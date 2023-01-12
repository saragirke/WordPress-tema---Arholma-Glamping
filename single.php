<?php
//Hämtar header
get_header();
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
      <!-- Hämtar rubrik -->
<h1 class="rubrik"> <?php the_title(); ?> </h1> 
      <?php
      //Hämtar inlägg
      the_content();
?>

</div>
</div>
<?php
endwhile;
endif;
?>

<?php
//Hämtar footer
get_footer(); 
?>
   </body>
   </html>