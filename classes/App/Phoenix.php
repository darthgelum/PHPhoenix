<?php

namespace App;

/**
 * Phoenix dependency container
 *
 * @property-read \PHPhoenix\DB $db Database module
 * @property-read \PHPhoenix\ORM $orm ORM module
 */
class Phoenix extends \PHPhoenix\Phoenix {

	protected $modules = array(
		'db' => '\PHPhoenix\DB',
		'orm' => '\PHPhoenix\ORM'
	);

	protected function after_bootstrap() {
		// Whatever code you want to run after bootstrap is done.
	}
// Exceptions
// Uncomment to handle exceptions

//    public function handle_exception($exception)
//    {
//
//    }

}
