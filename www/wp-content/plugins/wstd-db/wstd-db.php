<?php
/**
 * Plugin Name: Database for Workstore Tokyo Do
 */

add_action( 'plugins_loaded', '_init_wstd_db_plugin' );
function _init_wstd_db_plugin() {
	if ( class_exists( 'mimosafa\ClassLoader' ) ) {
		mimosafa\ClassLoader::register( 'WSTDB', __DIR__ . '/inc' );
		WSTDB\Bootstrap::init();
	}
}
