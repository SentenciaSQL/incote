<?php
/**
 * Template Name: Courses
 * Template Post Type: post
 * 
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<main id="main" class="site-main">
		
			<header class="entry-header header-course">
				<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
				<?php dynamic_sidebar('advanced-breadcrumb-widget'); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

		
		</main>
	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
