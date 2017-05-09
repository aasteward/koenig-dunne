<?php

$fields = array(
	'color' => __( 'Color:', 'lawyers-attorneys' ),
	'opacity' => __( 'Opacity:', 'lawyers-attorneys' ),
	'image' => __( 'Image / pattern:', 'lawyers-attorneys' ),
	'repeat' => __( 'Repeat:', 'lawyers-attorneys' ),
	'attachment' => __( 'Attachment:', 'lawyers-attorneys' ),
	'position' => __( 'Position:', 'lawyers-attorneys' ),
	'size' => __( 'Size:', 'lawyers-attorneys' ),
);

$sep = isset( $sep ) ? $sep : '-';

$current = array();

if ( ! isset( $only ) ) {
	if ( isset( $show ) ) {
		$only = explode( ',', $show );
	} else {
		$only = array();
	}
} else {
	$only = explode( ',', $only );
}

$show = array();

global $post;
foreach ( $fields as $field => $fname ) {
	if ( isset( $GLOBALS['wpv_in_metabox'] ) ) {
		$current[$field] = get_post_meta( $post->ID, "$id-$field", true );
	} else {
		$current[$field] = wpv_get_option( "$id-$field" );
	}
	$show[$field] = ( in_array( $field, $only ) || sizeof( $only ) == 0 );
}

$selects = array(
	'repeat' => array(
		'no-repeat' => __( 'No repeat', 'lawyers-attorneys' ),
		'repeat-x' => __( 'Repeat horizontally', 'lawyers-attorneys' ),
		'repeat-y' => __( 'Repeat vertically', 'lawyers-attorneys' ),
		'repeat' => __( 'Repeat both', 'lawyers-attorneys' ),
	),
	'attachment' => array(
		'scroll' => __( 'scroll', 'lawyers-attorneys' ),
		'fixed' => __( 'fixed', 'lawyers-attorneys' ),
	),
	'position' => array(
		'left center' => __( 'left center', 'lawyers-attorneys' ),
		'left top' => __( 'left top', 'lawyers-attorneys' ),
		'left bottom' => __( 'left bottom', 'lawyers-attorneys' ),
		'center center' => __( 'center center', 'lawyers-attorneys' ),
		'center top' => __( 'center top', 'lawyers-attorneys' ),
		'center bottom' => __( 'center bottom', 'lawyers-attorneys' ),
		'right center' => __( 'right center', 'lawyers-attorneys' ),
		'right top' => __( 'right top', 'lawyers-attorneys' ),
		'right bottom' => __( 'right bottom', 'lawyers-attorneys' ),
	),
);

?>

<div class="wpv-config-row background clearfix <?php echo esc_attr( $class ) ?>">

	<div class="rtitle">
		<h4><?php echo $name // xss ok ?></h4>

		<?php wpv_description( $id, $desc ) ?>
	</div>

	<div class="rcontent">
		<div class="bg-inner-row">
			<?php if ( $show['color'] ): ?>
				<div class="bg-block color">
					<div class="single-desc"><?php _e( 'Color:', 'lawyers-attorneys' ) ?></div>
					<input name="<?php echo esc_attr( $id.$sep ) ?>color" id="<?php echo esc_attr( $id ) ?>-color" type="text" data-hex="true" value="<?php echo esc_attr( $current['color'] ) ?>" class="wpv-color-input" />
				</div>
			<?php endif ?>

			<?php if ( $show['opacity'] ): ?>
				<div class="bg-block opacity range-input-wrap clearfix">
					<div class="single-desc"><?php _e( 'Opacity:', 'lawyers-attorneys' ) ?></div>
					<span>
						<input name="<?php echo esc_attr( $id.$sep )?>opacity" id="<?php echo esc_attr( $id ) ?>-opacity" type="range" value="<?php echo esc_attr( $current['opacity'] )?>" min="0" max="1" step="0.05" class="wpv-range-input" />
					</span>
				</div>
			<?php endif ?>
		</div>

		<div class="bg-inner-row">
			<?php if ( $show['image'] ): ?>
				<div class="bg-block bg-image">
					<div class="single-desc"><?php _e( 'Image / pattern:', 'lawyers-attorneys' ) ?></div>
					<?php $_id = $id;	$id .= $sep.'image'; // temporary change the id so that we can reuse the upload field ?>
					<div class="image <?php wpv_static( $value ) ?>">
						<?php include 'upload-basic.php'; ?>
					</div>
					<?php $id = $_id; unset( $_id ); ?>
				</div>
			<?php endif ?>

			<?php if ( $show['size'] ): ?>
				<div class="bg-block bg-size">
					<div class="single-desc"><?php _e( 'Cover:', 'lawyers-attorneys' ) ?></div>
					<label class="toggle-radio">
						<input type="radio" name="<?php echo esc_attr( $id.$sep ) ?>size" value="cover" <?php checked( $current['size'], 'cover' ) ?>/>
						<span><?php _e( 'On', 'lawyers-attorneys' ) ?></span>
					</label>
					<label class="toggle-radio">
						<input type="radio" name="<?php echo esc_attr( $id.$sep ) ?>size" value="auto" <?php checked( $current['size'], 'auto' ) ?>/>
						<span><?php _e( 'Off', 'lawyers-attorneys' ) ?></span>
					</label>
				</div>
			<?php endif ?>

			<?php foreach ( $selects as $s => $options ): ?>
				<?php if ( $show[$s] ): ?>
					<div class="bg-block bg-<?php echo esc_attr( $s )?>">
						<div class="single-desc"><?php echo $fields[$s] // xss ok ?></div>
						<select name="<?php echo esc_attr( $id.$sep.$s ) ?>" class="bg-<?php echo esc_attr( $s ) ?>">
							<?php foreach ( $options as $val => $opt ): ?>
								<option value="<?php echo esc_attr( $val ) ?>" <?php selected( $val, $current[$s] ) ?>><?php echo $opt // xss ok ?></option>
							<?php endforeach ?>
						</select>
					</div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	</div>
</div>