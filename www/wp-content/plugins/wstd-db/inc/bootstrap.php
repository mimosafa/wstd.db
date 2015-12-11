<?php
namespace WSTDB;

class Bootstrap {

	public static function init() {
		static $instance;
		$instance ?: $instance = new self();
	}

	private function __construct() {
		$this->init_repositories();
	}

	private function init_repositories() {
		$vdr = mimosafa_post_type_instance( 'vendor', 'wstdb_vendor', 'show_ui=yes&menu_position=5&label=事業者&menu_icon=dashicons-building' );
		$str = mimosafa_post_type_instance( 'store',  'wstdb_store',  'public=true&menu_position=6&label=店舗&menu_icon=dashicons-store' );
		$car = mimosafa_post_type_instance( 'car',    'wstdb_car',    'public=true&menu_position=7&label=車両' );
	}

}
