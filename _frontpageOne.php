<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootIV-wp-theme
 * @author MarlonTamo
 */


get_header(); ?>



	<div class="container">
        <h1>front-page.php file</h1>
		<?php get_template_part('template/content','frontpage'); ?>

	</div>

	<div class="clearfix">&nbsp;</div>
	
	<div class="container">

		<?php #get_template_part( ); ?>

	</div>

	<div class="clearfix">&nbsp;</div>

	<div class="container">

		

	</div>



<?php get_footer(); ?>