<tr id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<td class="course-id">
		<?php echo esc_html( get_post_meta( get_the_ID(), 'course_unique_id', true ) ); ?>
	</td>
	<td class="course-number">
		<?php if(ot_get_option('link_course_number') == "on") : ?>
			<a href="<?php the_permalink() ?>">
				<?php echo esc_html( get_post_meta( get_the_ID(), 'course_number', true ) ); ?>
			</a>
		<?php else : ?>
			<?php echo esc_html( get_post_meta( get_the_ID(), 'course_number', true ) ); ?>
		<?php endif; ?>
	</td>
	<td class="course-name">
		<?php if(ot_get_option('link_course_name') == "on") : ?>
			<a href="<?php the_permalink() ?>">
				<?php echo esc_html( get_post_meta( get_the_ID(), 'course_name', true ) ); ?>
			</a>
		<?php else : ?>
			<?php echo esc_html( get_post_meta( get_the_ID(), 'course_name', true ) ); ?>
		<?php endif; ?>
	</td>
	<td class="course-instructor">
		<?php if(ot_get_option('link_course_instructor') == "on") : ?>
			<?php the_author_posts_link(); ?>
		<?php else : ?>
			<?php the_author(); ?>
		<?php endif; ?>
	</td>
	<td class="course-room-number">
		<?php echo esc_html( get_post_meta( get_the_ID(), 'course_room_number', true ) ); ?>
	</td>
	<td class="course-days">
		<?php echo esc_html( get_post_meta( get_the_ID(), 'course_days', true ) ); ?>
	</td>
	<td class="course-time">
		<?php echo esc_html( get_post_meta( get_the_ID(), 'course_time', true ) ); ?>
	</td>
	<td class="course-credits">
		<?php echo esc_html( get_post_meta( get_the_ID(), 'course_credits', true ) ); ?>
	</td>
	<td class="course-prerequisites">
		<?php echo esc_html( get_post_meta( get_the_ID(), 'course_prerequisites', true ) ); ?>
	</td>

	

</tr><!-- #post-## -->