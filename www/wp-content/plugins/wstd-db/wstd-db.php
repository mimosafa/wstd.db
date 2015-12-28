<?php
/**
 * Plugin Name: Database for Workstore Tokyo Do
 */

add_action( 'plugins_loaded', '_init_wstd_db_plugin' );
function _init_wstd_db_plugin() {
	if ( class_exists( 'mimosafa\ClassLoader' ) ) {
		mimosafa\ClassLoader::register( 'WSTDB', __DIR__ . '/inc' );
		mimosafa\ClassLoader::register( 'WSTDB\\Domain', __DIR__ . '/domain' );
		WSTDB\Bootstrap::init();
	}
}
