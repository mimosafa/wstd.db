<?php
namespace WSTDB\Domain;
use mimosafa\WP\Repository;

class Kitchencar extends Repository\PostType {

	protected $name     = 'kitchencar'     ;
	protected $id       = 'wstd_kitchencar';
	protected $singular = 'kitchencar'     ;
	protected $plural   = 'kitchencars'    ;

	protected $value_objects = [
		'name'   => [ 'model' => 'post_title'  ],
		'vin'    => [ 'model' => 'metadata'    ],
		'vendor' => [ 'model' => 'post_parent' ],
		'length' => [ 'model' => 'metadata'    ],
		'width'  => [ 'model' => 'metadata'    ],
		'height' => [ 'model' => 'metadata'    ],
	];

	protected $service = [
		//
	];

}
