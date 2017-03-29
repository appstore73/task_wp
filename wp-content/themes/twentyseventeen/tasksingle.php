<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 * Template Name: CustomPageT1
 */

//global $wp_session;
session_start();
get_header();
 ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// echo '<pre>';
			// var_dump($_SESSION['email']);
				/* Start the Loop */
				if(isset($_SESSION['email'])) { ?>
					<a href="<?php echo get_bloginfo('url'); ?>/logout" >Logout</a>
			<?php	echo 'welcome';
				} else {  ?>
					<a href="<?php echo get_bloginfo('url'); ?>/login" >Login</a>
			<?php	echo 'Sorry';
				}
// 				$wp_session = ! empty( $wp_session['task_user'] ) ? $wp_session['task_user'] : false;
// echo 'Loggedin';
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();
