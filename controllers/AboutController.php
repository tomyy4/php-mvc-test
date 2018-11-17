<?php

class AboutController {

	public function __construct() {
		$this->index();
	}
	public function index() {
		if ($_SERVER['REQUEST_URI'] === '/about') {
			require 'views/about.view.php';
		}
	}
}

