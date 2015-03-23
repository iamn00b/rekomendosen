<?php

use SSO\SSO;
// simple controller example
// you can access Slim app instance via $this->app

class Home extends _MainController {

	function welcome() {
		if (Auth::check()) 
			$this->app->response->redirect($this->app->urlFor('home'), 400);
		
		$this->render('welcome.html');
	}

	function index() {
		$this->render('home.html'); 
	}

	function logout() {
		Auth::logout();
	}
}