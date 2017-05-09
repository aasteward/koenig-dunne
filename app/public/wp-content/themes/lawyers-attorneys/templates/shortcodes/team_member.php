<?php

$content   = trim($content);
$icons_map = array(
	'googleplus' => 'googleplus',
	'linkedin'   => 'theme-linkedin',
	'facebook'   => 'facebook',
	'twitter'    => 'twitter',
	'youtube'    => 'youtube',
	'pinterest'  => 'pinterest',
	'lastfm'     => 'lastfm',
	'instagram'  => 'instagram',
	'dribble'    => 'dribbble2',
	'vimeo'      => 'vimeo',
);

?>
<div class="team-member<?php echo (!empty($content) ? ' has-content' : '')?>">
	<?php if(!empty($picture)): ?>
	<div class="thumbnail">
		<?php if(!empty($url)):?>
			<a href="<?php echo esc_attr( $url ) ?>" title="<?php echo esc_attr( $name )?>">
		<?php endif ?>
			<?php wpv_url_to_image( $picture )?>
		<?php if(!empty($url)):?>
			</a>
		<?php endif ?>
	</div>
	<?php endif ?>
	<div class="team-member-info">
		<h3>
			<?php if(!empty($url)):?>
				<a href="<?php echo esc_url( $url ) ?>" title="<?php echo esc_attr( $name ) ?>">
			<?php endif ?>
				<?php echo $name?>
			<?php if(!empty($url)):?>
				</a>
			<?php endif ?>
		</h3>
		<?php if(!empty($position)): ?>
			<h5 class="regular-title-wrapper team-member-position"> <?php echo $position ?> </h5>
		<?php endif ?>
		<?php if(!empty($email)):?>
			<div><a href="mailto:<?php echo esc_attr( $email ) ?>" title="<?php echo esc_attr( sprintf(__('email %s', 'lawyers-attorneys'), $name ) ) ?>"><?php echo $email?></a></div>
		<?php endif ?>
		<?php if(!empty($phone)):?>
			<div class="team-member-phone"><a href="tel:<?php echo esc_attr( $phone ) ?>" title="<?php echo esc_attr( sprintf( 'Call %s', $name ) ) ?>"><?php echo $phone?></a></div>
		<?php endif ?>
		<div class="share-icons clearfix">
			<?php
				$icons = array_keys( $icons_map );
				foreach($icons as $icon): if(!empty($$icon)):  // that's not good enough, should be changed
					$icon_name = isset( $icons_map[$icon] ) ? $icons_map[$icon] : $icon;
			?>
					<a href="<?php echo esc_url( $$icon ) ?>" title=""><?php echo do_shortcode('[icon name="'.$icon_name.'"]'); ?></a>
			<?php endif; endforeach; ?>
		</div>
	</div>
	<?php if(!empty($content)): ?>
	<div class="team-member-bio">
		<?php echo do_shortcode($content) ?>
	</div>
	<?php endif ?>
</div>
