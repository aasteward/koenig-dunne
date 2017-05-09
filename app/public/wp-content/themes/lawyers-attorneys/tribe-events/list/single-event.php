<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

global $post;

?>

<div class="small-event-header clearfix">
	<div class="tribe-events-event-meta-wrapper">
		<?php do_action( 'tribe_events_before_the_meta' ); ?>
			<div class="tribe-events-event-meta">
				<?php
					$stime = tribe_get_start_date( $post, false, get_option('time_format') );
					$etime = tribe_get_end_date( $post, false, get_option('time_format') );
				?>
				<a href="<?php tribe_event_link($post) ?>" title="<?php esc_attr_e('Read More', 'lawyers-attorneys') ?>">
					<div class="thumbnail">
						<?php echo get_the_post_thumbnail( $post->ID, 'portfolio-masonry-3' ); // xss ok ?>
						<div class="date">
							<div class="date-inner">
								<div class="day"><?php echo tribe_get_start_date( $post, false, 'd' ) ?></div>
								<div class="month"><?php echo tribe_get_start_date( $post, false, 'F' ) ?></div>
							</div>
						</div>
					</div>
				</a>
			</div><!-- .tribe-events-event-meta -->
		<?php do_action( 'tribe_events_after_the_meta' ); ?>
	</div>
</div>

<div class="tribe-events-event-details tribe-clearfix">

	<?php do_action( 'tribe_events_before_the_event_title' ); ?>
	<h4 class="tribe-events-list-event-title entry-title summary">
		<a class="url entry-title" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			<?php the_title() ?>
		</a>
	</h4>
	<?php do_action( 'tribe_events_after_the_event_title' ); ?>

	<div class="when-where">
		<div><?php echo wpv_shortcode_icon( array( 'name' => 'theme-clock' ) ) ?> <?php echo $stime ?> <?php if ( $stime !== $etime ) echo '&mdash; ' . $etime ?></div>
		<div><?php echo wpv_shortcode_icon( array( 'name' => 'theme-pointer' ) ) ?> <?php
			if( class_exists( 'Tribe__Events__Pro__Templates__Single_Venue' ) ) {
				echo tribe_get_venue_link( $post->ID, true );
			} else {
				echo tribe_get_venue( $post->ID );
			}
		?>
		</div>
	</div>

	<!-- Event Content -->
	<?php do_action( 'tribe_events_before_the_content' ); ?>
	<div class="tribe-events-list-photo-description tribe-events-content entry-summary description">
		<?php the_excerpt(); ?>
	</div>
	<?php do_action( 'tribe_events_after_the_content' ) ?>

</div><!-- /.tribe-events-event-details -->
