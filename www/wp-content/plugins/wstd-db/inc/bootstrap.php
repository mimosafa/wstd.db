<?php
namespace WSTDB;
use mimosafa\WP\Object;

class Bootstrap {

	public static function init() {
		static $instance;
		$instance ?: $instance = new self();
	}

	private function __construct() {
		$this->init_repositories();
	}

	private function init_repositories() {
		$vdr = Object\Repository\PostType::create( 'vendor', 'wstdb_vendor', 'show_ui=yes&menu_position=5&label=事業者&menu_icon=dashicons-building' );
		$str = Object\Repository\PostType::create( 'store',  'wstdb_store',  'public=true&menu_position=6&label=店舗&menu_icon=dashicons-store' );
		$car = Object\Repository\PostType::create( 'car',    'wstdb_car',    'public=true&menu_position=7&label=車両&supports=no' );
		$vdr->label_add_new = '事業者登録';
		$vdr->add_value_object( 'top', [ 'context' => 'top' ] );
		$vdr->add_value_object( 'before_permalink', [ 'context' => 'before_permalink' ] );
		$vdr->add_value_object( 'after_title', [ 'context' => 'after_title' ] );
		$vdr->add_value_object( 'after_editor', [ 'context' => 'after_editor' ] );
		$vdr->add_value_object( 'advanced', [ 'context' => 'advanced' ] );
		$vdr->add_value_object( 'edit_form_advanced', [ 'context' => 'edit_form_advanced', 'show_admin_column' => true ] );
		$vdr->add_value_object( 'normal', [ 'context' => 'normal' ] );
	}

	public function callback( \WP_Post $post, $args ) {
		var_dump( $post, $args );
	}

}
