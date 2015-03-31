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
	
	function tampildosen() {
		$daftardosen = Dosen::all();
		$data = array();
		$data['dosen'] = $daftardosen;
		$this->render('dosen.html',$data);
	}
	
	function tampilmatkul() {
		$daftar = Matakuliah::all();
		foreach ($daftar as $in) {
			$in->dosens;
		}
		$data = array();
		$data['matakuliah'] = $daftar;
		$this->render('matakuliah.html',$data);
	}
	
	function tampilrincianmatkul() {
		$daftar = Matakuliah::find('IK00001');
		$daftar->dosens;
		$data = array();
		$data['matakuliah'] = $daftar;
		$this->render('rincianmatkul.html',$data);
	}
	
	function tampilrinciandosen() {
		$dosen = Dosen::find('1112');
		$temp = $dosen->nip;
		$daftarreview = Review::where('dosen_nip','=', $temp)->get();
		$daftarkomentar = Komentar::all();
		$daftarvote = UpvoteDownvote::all();
		$daftarreport = Report::all();
		$data = array();
		$data['dosen'] = $dosen;
		$data['review'] = $daftarreview;
		$data['komentar'] = $daftarkomentar;
		$data['vote'] = $daftarvote;
		$data['report'] = $daftarreport;
		$this->render('rinciandosen.html',$data);
	}
	
	function tampilhasilpencarian($query) {
		$dosen = Dosen::where('nama','=', $query)->get();
		$data = array();
		$data['dosen'] = $dosen->get(0);
		$this->render('pencarian.html',$data);
	}
}