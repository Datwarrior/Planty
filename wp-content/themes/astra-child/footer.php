<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

<footer style="background-color: white; text-align: center; padding-top: 15px; height: 60px;">

     <a class="Mentions" href="http://localhost/Projet%206/">Mentions légales</a>

</footer>


<?php 	astra_content_after();?>
		
<?php 	astra_footer_before();?>
		
		
<?php 	astra_footer_after(); ?>


<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
