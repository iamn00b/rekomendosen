<?php

class Controller {
	
	protected $app;

	function __construct() {
		$this->app = Slim\Slim::getInstance();
	}

	/* render a twig page
	 * a wrapper function to wrap twig render function with slim  
	 * view template directory setting
	 */
	protected function render($page, $pass_var = array()) {
		$this->app->view()->setTemplatesDirectory(TEMPLATES_PATH);
		$this->app->render($page, $pass_var);
	}

}