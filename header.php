<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sidans titel -->
    <title><?php wp_title('',true,'right'); ?></title>
    <!--CSS --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="icon" type="image/x-icon" href="/images/tent.png">
    <!-- Typsnitt -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!-- Hook för att tillåta plugins att lägga till JavaScript. -->
    <?php wp_head(); ?> 
</head>
<body>
<header>

<!-- Dynamisk header-bild -->
<?php if ( get_header_image() ) : ?>
<div class="start" style="background-image:linear-gradient(rgba(255, 255, 255, 0.173), rgba(255, 255, 255, 0.173)), url(<?php header_image(); ?>);">
<?php endif; ?>

<!-- Dynamsik Logga -->
<div class="logga" onclick="location.href='www.studenter.miun.se/~sagi1700/writeable/arholma/front-page.php';">
<?php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
?>
</div>

<nav>
<?php
//Hämtar meny
wp_nav_menu(); ?>
</nav>
</div>
</header>
    
