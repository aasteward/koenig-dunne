<?php
/**
 * Post sub-header template
 *
 * @package wpv
 */

$title = get_the_title();
?>
<div class="post-subheader">
	<?php if(wpv_get_optionb('meta_posted_on')): ?>
		<h6 class="post-date">
			<?php if(empty($title)): ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
					<span class="date updated"><?php the_time(get_option('date_format')) ?></span>
				</a>
			<?php else: ?>
				<span class="date updated"><?php the_time(get_option('date_format')) ?></span>
			<?php endif ?>
		</h6>
	<?php endif ?>
</div>