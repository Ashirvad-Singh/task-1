<?php
/**
 * The header for our child theme
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @subpackage  Twenty_Twenty_One_Child
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php echo wp_get_document_title(); ?></title>
	<!-- Page Title -->
	<title><?php the_title()?></title> 
	<!-- Page Title - END -->
	<link rel="icon" type="image/x-icon" sizes="16x16" href="images/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory() ?>/../css/style.css">
	
    <?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
   $(document).ready(function() {
    $(".menu-item-14, .menu-item-15, .menu-item-16, .menu-item-17").click(function() {
        var targetId = "";
        
        if ($(this).hasClass('menu-item-14')) {
            targetId = "#bodyTop";
        } else if ($(this).hasClass('menu-item-15')) {
            targetId = "#aboutStudynew";
        } else if ($(this).hasClass('menu-item-16')) {
            targetId = "#pediatricAbout";
        } else if ($(this).hasClass('menu-item-17')) {
            targetId = "#faq";
        }

        if (targetId) {
            $('html, body').animate({
                scrollTop: $(targetId).offset().top
            }, 1000);
        }
    });
});
</script>

</head>
<body id="bodyTop">
	<header class="container-fluid px-0 header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-dark navbar-me customnav" id="mainNav">
			<div class="container-fluid">
				<a class="navbar-brand toplogo text-left" href="#bodyTop"> 
             <?php the_custom_logo();?>
                </a>
				<button id="nav-icon1" class="navbar-toggler navbar-toggle navbarbtn" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
			
                   <?php
wp_nav_menu(array(
    'menu' => 'primary menu',
    'menu_class'     => 'navbar-nav scroll',
   
));
?>

				</div>
			</div>
		</nav>
	</header>
