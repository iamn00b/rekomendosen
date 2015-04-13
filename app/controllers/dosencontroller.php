<?php

class DosenController extends _MainController { 

	const HALAMAN_DAFTAR_DOSEN = 'dosen/dosen.html';
	const HALAMAN_RINCIAN_DOSEN = 'dosen/rinciandosen.html';

	const HALAMAN_ADMIN_DOSEN = 'admin/dosen.html';


	function tampilDaftarDosen() {
		$daftarDosen = Dosen::all();	//TODO : Paginasi

		$data = array();
		$data['daftarDosen'] = $daftarDosen;

		$this->render(self::HALAMAN_DAFTAR_DOSEN, $data);
	}

	function tampilRincianDosen($id) {
		$dosen = Dosen::find($id);		//TODO : Handle Not Found (404)

		$data = array();
		$data['dosen'] = $dosen;

		$this->render(self::HALAMAN_RINCIAN_DOSEN, $data);
	}

	/* ADMIN */
	function tampilAdministrasiDosen() {	// TODO : Auth harus admin
		$dosen = Dosen::all();			// TODO : Paginasi

		$data = array();
		$data['daftarDosen'] = $dosen;

		$this->render(self::HALAMAN_ADMIN_DOSEN,$data);
	}
	
	// CRUD
	function createDosen() {
		$dosen = $this->app->request->post();

		$nip = $dosen['nip'];
		$nama = $dosen['nama'];
		$jeniskelamin = $dosen['jeniskelamin'];
		$ttl = $dosen['ttl'];

		$dosen1 = new Dosen;
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->ttl = $ttl;
		$dosen1->save();

		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}
	
	function updateDosen($id) {
		$dosen = $this->app->request->post();

		$nip = $dosen['nip'];
		$nama = $dosen['nama'];
		$jeniskelamin = $dosen['jeniskelamin'];
		$ttl = $dosen['ttl'];

		$dosen1 = Dosen::find($id);
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->ttl = $ttl;
		$dosen1->save();

		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}
	
	function deleteDosen($id) {
		$dosen = Dosen::find($id)->delete();
		
		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}

}