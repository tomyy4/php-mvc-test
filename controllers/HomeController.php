<?php

class HomeController {

	public function __construct() {
		$this->index();
	}

	public function index() {
		if ($_SERVER['REQUEST_URI'] === '/') {
			require 'views/home.view.php';
		}
	}	
}