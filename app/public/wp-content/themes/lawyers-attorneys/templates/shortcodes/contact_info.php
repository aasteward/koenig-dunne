
<div class="contact_info_wrap">
	<?php if(!empty($name)):?>
		<p><?php echo do_shortcode('[icon name="user" color="'.$color.'"]'.$name)?></p>
	<?php endif ?>

	<?php if ( ! empty( $phone ) ) : ?>
		<p><a href="tel:<?php echo esc_attr( $phone ) ?>" title="<?php echo esc_attr( sprintf( 'Call %s', $name ) ) ?>"><?php echo do_shortcode('[icon name="theme-phone" color="' . $color . '"]' . $phone)?></a></p>
	<?php endif ?>

	<?php if ( ! empty( $cellphone ) ) : ?>
		<p><a href="tel:<?php echo esc_attr( $cellphone ) ?>" title="<?php echo esc_attr( sprintf( 'Call %s', $name ) ) ?>"><?php echo do_shortcode('[icon name="theme-cellphone" color="' . $color . '"]' . $cellphone)?></a></p>
	<?php endif ?>

	<?php if(!empty($email)):?>
		<p><a href="mailto:<?php echo $email?>" ><?php echo do_shortcode('[icon name="theme-mail" color="'.$color.'"]'.$email)?></a></p>
	<?php endif ?>

	<?php if(!empty($address)):?>
		<p><span class="contact_address"><?php echo do_shortcode('[icon name="theme-map" color="'.$color.'"]'.$address)?></span></p>
	<?php endif ?>

</div>
