<?php

class RobotsController {


	public function __construct() {
		$this->index();
	}
	
	public function index() {
		if ($_SERVER['REQUEST_URI'] === '/robots') {
			require 'views/robots.view.php';
		}

	}
}
