<?php

class _MainController extends Controller {

	protected function render($page, $pass_var = array()) {

		$pass_var['pengguna'] = Auth::getPengguna();
		$pass_var['BASE_URL'] = BASE_URL;

		parent::render($page, $pass_var);
	}
}