<?php

use SSO\SSO;
// simple controller example
// you can access Slim app instance via $this->app

class HomeController extends _MainController {

	function welcome() {
		// if (Auth::check()) 
		// 	$this->app->response->redirect($this->app->urlFor('home'), 400);
		
		$this->render('index.html', array(), false);
	}

	function index() {

		$data = array();

		$data['daftarReview'] = Review::orderBy('created_at', 'desc')->get(); //orderBy('created_at')->get();
		$this->render('home.html', $data); 
	}

	function logout() {
		$this->readNotifikasi();
		Auth::logout();
	}
	
	function readNotifikasi() {
		$pengguna = Auth::getPengguna();
		$notifikasi = Notifikasi::where('pengguna_npm', '=', $pengguna->npm)->get();
		foreach ($notifikasi as $notif) {
			if($notif->total > 0) {
				$notif->read = 1;
				$notif->save();
			}
		}
	}

	function tampilAdministrasiStatistik() {
		$data = array();

		$data['statpengguna'] = array();
		$data['statpengguna']['total'] = Pengguna::count();
		$data['statpengguna']['totalbulan'] = Pengguna::count();
		$data['statpengguna']['totalminggu'] = Pengguna::count();

		$data['statreview']['total'] = Review::count();
		$data['statkomentar']['total'] = Komentar::count();

		$this->render('admin/statistik.html', $data);
	}
}