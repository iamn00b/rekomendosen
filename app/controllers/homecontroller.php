<?php

use SSO\SSO;
// simple controller example
// you can access Slim app instance via $this->app

class HomeController extends _MainController {

	const HALAMAN_WELCOME = 'welcome.html';
	const HALAMAN_BERANDA = 'home.html';

	function welcome() {
		if (Auth::check()) 
			$this->app->response->redirect($this->app->urlFor('home'), 200);
		
		$this->renderTanpaLogin(self::HALAMAN_WELCOME, array());
	}

	function index() {

		$data = array();

		$data['daftarReview'] = Review::orderBy('created_at', 'desc')->get(); //orderBy('created_at')->get();
		$this->render('home.html', $data); 
	}

	function logout() {
		Auth::logout();
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

	function achievement() {
		$data = array();
		$data['achievements'] = Achievement::all();

		$this->render('achievement.html', $data);
	}

	function maintenanceMode($status) {
		$underMaintenance = ServerMode::where('desc','=','maintenance')->first();
		$underMaintenance->status = strtoupper($status);
		$underMaintenance->save();

		$this->app->response->redirect($this->app->urlFor('statistik'), 200);
	}
}