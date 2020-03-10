<?php
function better_profile_block() {

	// Scripts.
	wp_register_script(
		'better-profile-block-script', // Handle.
		plugins_url( 'block.js', __FILE__ ), // Block.js: We register the block here.
		array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ),
		true // Load script in footer.
	);

	// Styles.
	wp_register_style(
		'better-profile-block-editor-style', // Handle.
		plugins_url( 'editor.css', __FILE__ ), // Block editor CSS.
		array( 'wp-edit-blocks' ), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
	wp_register_style(
		'better-profile-block-frontend-style', // Handle.
		plugins_url( 'style.css', __FILE__ ), // Block editor CSS.
		array(), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
    );
    
    register_block_type( 'profile/block', array(
		'editor_script' => 'better-profile-block-script',
		'editor_style' => 'better-profile-block-editor-style',
		'style' => 'better-profile-block-frontend-style',
	) );

} // End function better_profile_block().
add_action( 'init', 'better_profile_block' );

