<?php

namespace App\Controller;

class Hello extends \App\Page {

	public function action_index() {
		$this->view->subview = 'hello';
        $this->view->title = "aaa";
        $subview = rand(0,40);
		$this->view->message = "{$subview}";

	}

}
