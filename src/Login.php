<?php declare(strict_types = 1);

namespace kovarp\ChilliAdmin;

class Login {
	public function __construct() {
		add_filter('login_headerurl', array($this, 'logoUrl'));
	}

	public function logoUrl() {
		return 'https://chilli.codes/';
	}
}