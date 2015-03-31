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
	
	function tampilrincianmatkul() {
		$daftar = Matakuliah::find('IK00001');
		$daftar->dosens;
		$data = array();
		$data['matakuliah'] = $daftar;
		$this->render('rincianmatkul.html',$data);
		
		
	function tampilmatkul() {
		$daftar = Matakuliah::all();
		foreach ($daftar as $in) {
			$in->dosens;
		}
		$data = array();
		$data['matakuliah'] = $daftar;
		$this->render('matakuliah.html',$data);
	}
	}
	function tampilandosen() {
		$daftardosen= Dosen::all();
		$this->render('dosen.html',array('dosen'=>$daftardosen));
	}	
	
	
	
	
	
	
	
	
	
	function tampilcrudmatkul() {
		$matkul= Matakuliah::all();
		$data = array();
		$data['matakuliah'] = $matkul;
		$this->render('crudmatkul.html',$data);
	}
}