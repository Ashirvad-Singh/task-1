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
	<meta charset="utf-8">
	
	<!-- Page Title -->
	<title><?php the_title()?></title> 
	<!-- Page Title - END -->
	<link rel="icon" type="image/x-icon" sizes="16x16" href="images/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory() ?>/../css/style.css">
	<link rel="canonical" href="https://pediatric-anemia.autocruitment.com/" />
    <?php wp_head(); ?>
</head>
<body id="bodyTop">
	<header class="container-fluid px-0 header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-dark navbar-me customnav" id="mainNav">
			<div class="container-fluid">
				<a class="navbar-brand toplogo text-left" href="#bodyTop"> 
                if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
}
                </a>
				<button id="nav-icon1" class="navbar-toggler navbar-toggle navbarbtn" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
			
                    <?php
                    wp_nav_menu( array( 
                        'menu' => 'Header Menu',
                        'menu_class' => 'navbar-nav topnavbarul',
                        'container' => '',
                    
                    ) );

                    ?>
				</div>
			</div>
		</nav>
	</header>