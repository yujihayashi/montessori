<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header(); ?>


<section id="content" class="site-content blog-default">
	<div class="page-header">
		<div class="container">
			<header class="">
				<h1 class="text-center">
					Calendário
				</h1>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="container">
		<div class="entry-content">
			<?php tribe_events_before_html(); ?>
			<?php tribe_get_view(); ?>
			<?php tribe_events_after_html(); ?>
		</div>
	</div>
</section> <!-- #tribe-events-pg-template -->
<?php get_footer(); ?>