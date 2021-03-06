<?php

do_action('mptt_event_timeslots_before_title');

if ( !empty($count) ) {
	?>
	<h3 class="timeslots-title"><?php printf(__('Event Timeslots (%s)', 'mp-timetable'), $count); ?></h3>
	<?php
}
$time_format = get_option('time_format');

do_action('mptt_event_timeslots_before_timeslots', $events);

if ( !empty($events) ) {
	foreach ($events as $event): ?>
		<p class="timeslot">

			<a class="timeslot-link" href="<?php echo esc_url( get_permalink($event->column_id) ); ?>"><?php
				echo esc_html( get_the_title($event->column_id) ); ?></a>

			<br/>
			<time datetime="<?php echo esc_attr( $event->event_start ); ?>" class="timeslot-start"><?php
				echo esc_html( date($time_format, strtotime($event->event_start)) ); ?></time>
			<?php echo apply_filters('mptt_timeslot_delimiter', ' - '); ?>
			<time datetime="<?php echo esc_attr( $event->event_end ); ?>" class="timeslot-end"><?php
				echo esc_html( date($time_format, strtotime($event->event_end)) ); ?></time>

			<?php if (!empty($event->post->sub_title)) { ?>
				<br/>
				<span class="timeslot-subtitle"><?php echo wp_kses_post( $event->post->sub_title ); ?></span>
			<?php } ?>

			<?php if (!empty($event->description)) { ?>
				<br/>
				<span class="timeslot-description"><?php echo wp_kses_post( stripslashes( $event->description ) ); ?></span>
			<?php } ?>
			<?php if (!empty($event->user)) { ?>
				<br/>
				<span class="timeslot-user vcard">
					<?php echo get_avatar(
						$event->user->ID,
						apply_filters('mptt_event_timeslots_avatar_size', 32),
						'',
						$event->user->display_name
					); ?> <?php echo esc_html( $event->user->display_name ); ?>
				</span>
			<?php } ?>

		</p>
	<?php endforeach;
}

do_action('mptt_event_timeslots_after_timeslots', $events);