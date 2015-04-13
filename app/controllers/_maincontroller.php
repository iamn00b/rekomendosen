<?php

class _MainController extends Controller {

	function render($page, $pass_var = array(), $auth=true) {

		$pass_var['BASE_URL'] = BASE_URL;
		if ($auth) 
			$pass_var['pengguna'] = Auth::getPengguna();

		parent::render($page, $pass_var);
	}
}