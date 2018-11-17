<?php

class ContactController {
	

	public function __construct() {
		$this->index();
	}
	public function index() {
		if ($_SERVER['REQUEST_URI'] === '/contact') {
			require 'views/contact.view.php';
		}
	}

}
