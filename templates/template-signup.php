<?php
/*
Template Name: Signup Page
*/
?>

<?php get_header(); ?>

<div class="page-header">
	<div class="container">
		<div class="twelve columns page-title">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="container intro">
	<h2 class="page-title-inner"><?php echo get_field('page_title'); ?></h2>
	<div class="intro-text">
		<p><?php echo get_field('page_intro_text'); ?></p>
	</div>
</div>

<div class="container">
	<div class="seven columns">
		<div class="signup">
			<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 5, 'title' => false, 'description' => false ) ); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>