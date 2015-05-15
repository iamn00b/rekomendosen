<?php

class _MainController extends Controller {

	public function render($page, $pass_var = array()) {

		$pass_var['BASE_URL'] = BASE_URL;
		$pass_var['pengguna'] = Auth::getPengguna();

		parent::render($page, $pass_var);
	}

	public function renderTanpaLogin($page, $pass_var = array()) {

		$pass_var['BASE_URL'] = BASE_URL;
		parent::render($page, $pass_var);

	}

	public function renderAPI($pass_var = array()) {

		header('Content-Type: application/json');
		echo json_encode($pass_var);
		
	}
}