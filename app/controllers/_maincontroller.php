<?php

class _MainController extends Controller {

	protected function render($page, $pass_var = array()) {

		$pass_var['pengguna'] = Auth::getPengguna();

		parent::render($page, $pass_var);
	}
}