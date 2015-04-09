<?php

class MataKuliahController extends _MainController {
	
	const HALAMAN_DAFTAR_MATA_KULIAH = 'matakuliah.html';
	const HALAMAN_RINCIAN_MATA_KULIAH = 'rincianmatakuliah.html';
	const HALAMAN_ADMIN_MATA_KULIAH = 'crudmatakuliah.html';
	
	function tampilDaftarMataKuliah() {

		$daftarMataKuliah = Matakuliah::all();	// TODO : Paginasi

		$data = array();
		$data['matakuliah'] = $daftarMataKuliah;
		$this->render(self::HALAMAN_DAFTAR_MATA_KULIAH, $data);
	}
	
	function tampilRincianMataKuliah($id) {
		$mataKuliah = Matakuliah::find($id);	//TODO : Handle Not Found (404)

		$data = array();
		$data['matakuliah'] = $mataKuliah;
		$this->render(self::HALAMAN_RINCIAN_MATA_KULIAH,$data);
	}

	/* ADMIN */
	function tampilAdministrasiMataKuliah() {
		$matakuliah = Matakuliah::all();

		$data = array();
		$data['matakuliah'] = $matakuliah;
		$this->render(self::HALAMAN_ADMIN_MATA_KULIAH, $data);
	}

	function createMataKuliah() {
		$matkul = $this->app->request->post();

		$kodemk = $matkul['kodemk'];
		$nama = $matkul['namamk'];
		$sks = $matkul['sksmk'];
		$prodi = $matkul['prodimk'];

		$matkul1 = new MataKuliah;
		$matkul1->kodemk = $kodemk;
		$matkul1->nama = $nama;
		$matkul1->sks = $sks;
		$matkul1->prodi = $prodi;
		$matkul1->save();

		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 400);
	}
	
	function updateMataKuliah($id) {
		$matkul = $this->app->request->post();

		$kodemk = $matkul['kodemk'];
		$nama = $matkul['namamk'];
		$sks = $matkul['sksmk'];
		$prodi = $matkul['prodimk'];

		$matkul1 = MataKuliah::find($id);
		$matkul1->kodemk = $kodemk;
		$matkul1->nama = $nama;
		$matkul1->sks = $sks;
		$matkul1->prodi = $prodi;
		$matkul1->save();
		
		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 400);
	}
	
	function deleteMataKuliah($id) {
		$matakuliah = MataKuliah::find($id)->delete();

		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 400);
	}
}