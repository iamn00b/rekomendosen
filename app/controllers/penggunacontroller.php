<?php

class PenggunaController extends _MainController {
	
	const HALAMAN_ADMINISTRASI_PENGGUNA = 'admin/pengguna.html';

	function tampilAdministrasiPengguna() {
		$pengguna = Pengguna::all();
		$data = array();
		$data['daftarPengguna'] = $pengguna;
		$this->render(self::HALAMAN_ADMINISTRASI_PENGGUNA, $data);
	}

	function createPengguna() {
		$pengguna = $this->app->request->post();

		$nomor = $pengguna['nomor'];
		$nama = $pengguna['nama'];
		$role = $pengguna['role'];

		$pengguna1 = new Pengguna;
		$pengguna1->nomor = $nomor;
		$pengguna1->nama = $nama;
		$pengguna1->role = $role;
		$pengguna1->save();
		$this->app->flash('notif', 'Berhasil menambah pengguna ' . $nama);

		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 200);
	}
	
	function updatePengguna($npm) {
		$pengguna = $this->app->request->post();

		$nomor = $pengguna['nomor'];
		$nama = $pengguna['nama'];
		$role = $pengguna['role'];
		$bannedhingga = $pengguna['bannedhingga'];

		$pengguna1 = Pengguna::find($npm);
		$pengguna1->nomor = $nomor;
		$pengguna1->nama = $nama;
		$pengguna1->role = $role;
		$pengguna1->banned_hingga = $bannedhingga;
		$pengguna1->save();
		$this->app->flash('notif', 'Berhasil mengubah pengguna ' . $nama);

		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 200);
	}
	
	function deletePengguna($npm) {
		$pengguna = Pengguna::find($npm)->delete();
		$this->app->flash('notif', 'Berhasil menghapus pengguna');
		
		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 200);
	}
	
}