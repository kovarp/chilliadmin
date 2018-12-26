<?php declare(strict_types = 1);

namespace kovarp\ChilliAdmin;

class Enqueue {
	public function __construct() {
		add_action('admin_enqueue_scripts', array($this, 'loadStyles'));
		add_action('login_enqueue_scripts', array($this, 'loadStyles'));
		add_action('admin_enqueue_scripts', array($this, 'loadScripts'));

		/** Disable default admin color scheme picker */
		remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');

	}

	/**
	 * Load Chilli admin stylesheet
	 */
	public function loadStyles() {
		wp_enqueue_style('chilli_admin_css', CHILLIADMIN_PLUGIN_URL . 'assets/css/styles.css');
	}

	/**
	 * Load Chilli admin scripts
	 */
	public function loadScripts() {
		wp_enqueue_script( 'chilli_admin_js', CHILLIADMIN_PLUGIN_URL . 'assets/js/script.js' );
	}
}