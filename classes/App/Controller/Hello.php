<?php

namespace App\Controller;

class Hello extends \App\Page {

	public function action_index() {
	    $this->view->message = 'Hello from PHPhoenix!';
        $this->view->title = "Hello from PHPhoenix";
        $this->view->subview = 'hello';
	}

}
