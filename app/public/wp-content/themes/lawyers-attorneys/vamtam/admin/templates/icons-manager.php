<div class="wrap">
	<h2><?php _e( 'VamTam Icons', 'lawyers-attorneys' ); ?></h2>

	<div id="dashboard-widgets-wrap" class="vamtam-icon-font-setup">
		<div id="dashboard-widgets" class="metabox-holder">
			<div id="postbox-container-1" class="step-1 postbox-container">
				<h3><?php _e( 'Step 1.', 'lawyers-attorneys' ) ?></h3>

				<hr>

				<div class="step-description"><?php printf( __( 'Use the <a href="%s" title="Generate an icon font" target="_blank">IcoMoon App</a> to generate an icon font. Download the generated icon font and upload the ZIP archive using the button below.', 'lawyers-attorneys' ), 'https://icomoon.io/app' ) // xss ok ?></div>

				<button class="vamtam-upload-icon-font button"><?php _e( 'Upload', 'lawyers-attorneys' ) ?></button>

				<br>

				<em class="step-in-progress"></em>
			</div>
			<div id="postbox-container-2" class="step-2 postbox-container inactive">
				<h3><?php _e( 'Step 2.', 'lawyers-attorneys' ) ?></h3>

				<hr>

				<div class="step-description"><?php _e( 'Good! Now we have to process the font uploaded in the previous step. This will replace your current icon font with the one you have just uploaded. Click the button below if you want to proceed.', 'lawyers-attorneys' ) // xss ok ?></div>

				<button class="vamtam-process-icon-font button button-primary" data-nonce="<?php echo esc_attr( wp_create_nonce( 'vamtam-icon-manager' ) ) ?>"><?php _e( 'Process', 'lawyers-attorneys' ) ?></button>

				<br>

				<em class="step-in-progress"><?php _e( 'This may take a bit of time. Please wait...', 'lawyers-attorneys' ) ?></em>
			</div>
			<div id="postbox-container-3" class="step-3 postbox-container inactive">
				<h3><?php _e( 'Done', 'lawyers-attorneys' ) ?></h3>

				<hr>

				<div class="result-wrapper">
					<?php _e( 'The following icons were successfully imported:', 'lawyers-attorneys' ) // xss ok ?>

					<div class="result-generated"></div>
				</div>

			</div>
		</div>
	</div>
</div>