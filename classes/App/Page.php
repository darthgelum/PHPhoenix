<?php

namespace App;

/**
 * Base controller
 *
 * @property-read \App\Phoenix $phoenix Phoenix dependency container
 */
class Page extends \PHPhoenix\Controller {

	protected $view;

	public function before() {
		$this->view = ($this->phoenix->view('main'));
	}

	public function after() {
		$this->response->body = $this->view->render();
	}

}
