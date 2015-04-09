<?php

class PenggunaController extends _MainController {
	
	const HALAMAN_ADMINISTRASI_PENGGUNA = 'crudpengguna.html';

	function tampilAdministrasiPengguna() {
		$pengguna = Pengguna::all();
		$data = array();
		$data['daftarpengguna'] = $pengguna;
		$this->render(self::HALAMAN_ADMINISTRASI_PENGGUNA, $data);
	}

	function createPengguna() {
		$pengguna = $this->app->request->post();

		$npm = $pengguna['npmpng'];
		$nama = $pengguna['namapng'];
		$role = $pengguna['rolepng'];
		$bannedhingga = $pengguna['bannedhinggapng'];

		$pengguna1 = new Pengguna;

		$pengguna1->npm = $npm;
		$pengguna1->nama = $nama;
		$pengguna1->role = $role;
		$pengguna1->banned_hingga = $bannedhingga;
		$pengguna1->save();

		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 400);
	}
	
	function updatePengguna($npm) {
		$pengguna = $this->app->request->post();

		$npm = $pengguna['npmpng'];
		$nama = $pengguna['namapng'];
		$role = $pengguna['rolepng'];
		$bannedhingga = $pengguna['bannedhinggapng'];

		$pengguna1 = Pengguna::find($npm);
		$pengguna1->npm = $npm;
		$pengguna1->nama = $nama;
		$pengguna1->role = $role;
		$pengguna1->banned_hingga = $bannedhingga;
		$pengguna1->save();

		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 400);
	}
	
	function deletePengguna($npm) {
		$pengguna = Pengguna::where('npm', '=', $npm)->delete();
		
		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 400);
	}
	
}