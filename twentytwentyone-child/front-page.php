<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One_Child
 * @since Twenty Twenty-One 1.0
 */

get_header(); 
?>

					<div id="body_section" class="body_section">
						<!-- Banner Section -->
						<section id="banner" style="background-image:'url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-bg.jpg')" class="container-fluid px-0 bannercontent">

							<div class="banner-text">
								<h1><?php the_field('banner_heading')?></h1>
								
								<div class="banner-content">
									<p class="custm-font"><?php the_field('banner_content')?></p>
									
								</div>
								<div class="banner-btn"><a href="#signup" class="qualifybtn btnscroll"><?php the_field('banner_button_text');?></a></div>
							</div>
						</section>
						<!-- Banner Section - END -->

						<div id="aboutStudynew" class="container-fluid px-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="new-tile-desc-outer">
						<h3 class="aboutTitle"><?php the_field('about_heading')?></h3>
						<p><?php the_field('about_content')?></p>
						
						<div class="qualify-red-btn"> <img src="images/red-up-arrow.png"> <a href="#signup" class="qualifybtn btnscroll"><?php the_field('about_button_content')?></a></div>

						
					</div>

					</div>
					<div class="col-md-6 aboutstudy-pic pic-mob desktopView">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 col-sm-6 participant-text">
									<div><?php the_field('box1_content')?></div>
								</div>
								<div class="col-md-6 col-sm-6"><img alt="Participate" class="lazypreload lazyloaded" data-src="images/member-1.png" src="<?php the_field('box_image1')?>"></div>
							</div>
							<div class="row nd-row">
								<div class="col-md-6 col-sm-6 mb30"> <img alt="Participate" class="lazypreload lazyloaded" data-src="images/member-2.png" src="<?php the_field('box_image2')?>"></div>
								<div class="col-md-6 col-sm-6"><img alt="Participate" class="lazypreload lazyloaded" data-src="images/member-3.png" src="<?php the_field('box_image3')?>"></div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>


		<!-- About work -->
		<div id="aboutWork" class="container-fluid px-0">
							<div class="container">
								<div class="section-head text-center"><h2 class="mainheading"><?php the_field('second_about_section_heading')?></h2></div>
								<div class="row">
								<?php

// Check rows exists.
if( have_rows('process_section') ):
 
    // Loop through rows.
    while( have_rows('process_section') ) : the_row(); 

        // Load sub field value.
		$image = get_sub_field('process_image');
        $content = get_sub_field('process_content'); 
		?>
									<div class="col-lg-3 col-sm-6">
									
										<div class="img-outer">
											<div class="img-wrap">
												<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo $image;?>">
											
											</div>
											<p><?php echo $content;?></p>								
										</div>
										

									</div>
									
									<?php
							
							endwhile;   
								endif;
?>
									

								</div>
							</div>
						</div>

						<!-- Next step Code -->
						<section id="next-step" class="">
							<div class="container">
								<div class="get-row">
									<div class="left-cont">
										<p><?php the_field('next_step_content')?></p>
											<h3><?php the_field('next_step_heading')?></h3>
										</div>
										<div class="right-cont">
											<div class="qualify-red-btn"> <a href="#signup" class="qualifybtn btnscroll"><?php the_field('next_step_text_button')?></a></div>
										</div>
									</div>
								</div>
							</section>

	
							

<section id="faq" class="container-fluid px-12 faq-bg">
			<div class="container">
				<div class="row">
					<h2 class="mainheading grey-color"><?php the_field('faq_heading') ?></h2>
					<div class="faq-outer">
						<div class="accordion" id="accordionExample">
						<?php

// Check rows exists.
if( have_rows('faq_questions') ):
 $count=1;
    // Loop through rows.
    while( have_rows('faq_questions') ) : the_row(); 

        // Load sub field value.
		$question = get_sub_field('faq_question');
        $answer = get_sub_field('faq_answer'); ?>
	
								
	<div class="card">
<div class="card-header" id="heading<?php echo $count;?>">
										<h5 class="mb-0
										<?php 
										if($count==1)
									{ 
										echo " ";
									}
									else{
										echo "collapsed";
										
									}
										?>
										" data-toggle="collapse" data-target="#collapse<?php echo $count;?>" aria-expanded="<?php 
									if($count==1)
									{ 
										echo true;
									}
									else{
										echo false;
									}
								
										 ?>" aria-controls="collapse<?php echo $count;?>"><?php echo $question;?> <span class="exp-icon"><i class="fas fa-plus-circle"></i></span></h5></div>
										<div id="collapse<?php echo $count;?>" class="collapse <?php 
									if($count==1)
									{ 
										echo "show";
									}
									?>" aria-labelledby="heading<?php echo $count;?>" data-parent="#accordionExample">
											<div class="card-body">
												<p><?php echo $answer;?></p>
											</div>
										</div>
									</div>
							

								<?php
								$count++;
							endwhile;   
								endif;
?>


								
									
										
									</div>
								</div>
							</div>
						</div>
					</section>


		<!-- About Section -->
		<section id="pediatricAbout" class="container-fluid px-0 aboutpediatric">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="mainheading"><?php the_field('about_pediatric_anemia_heading')?> </h2>
					</div> 
				</div>
				<p class="text-lg-left m-0">
				<?php the_field('about_pediatric_anemia_content')?></p>
				
			</div>
		</section>
		<!-- About Section - END -->	



		
						<!-- Footer Section -->
<?php
get_footer();
?>