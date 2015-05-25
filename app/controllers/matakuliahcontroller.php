<?php

class MataKuliahController extends _MainController {
	
	const HALAMAN_DAFTAR_MATA_KULIAH = 'matakuliah/matakuliah.html';
	const HALAMAN_RINCIAN_MATA_KULIAH = 'matakuliah/rincianmatakuliah.html';
	const HALAMAN_ADMIN_MATA_KULIAH = 'admin/matakuliah.html';
	
	function tampilDaftarMataKuliah() {

		$daftarMataKuliah = Matakuliah::all();	// TODO : Paginasi

		$data = array();
		$data['daftarMataKuliah'] = $daftarMataKuliah;
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
		$data['daftarMataKuliah'] = $matakuliah;
		$this->render(self::HALAMAN_ADMIN_MATA_KULIAH, $data);
	}

	function createMataKuliah() {
		$matkul = $this->app->request->post();

		$kodemk = $matkul['kodemk'];
		$nama = $matkul['nama'];
		$singkatan_1 = $matkul['singkatan_1'];
		$singkatan_2 = $matkul['singkatan_2'];
		$prodi = $matkul['prodi'];
		$jenis = $matkul['jenis'];
		$sks = $matkul['sks'];
		$semester = $matkul['semester'];
		$deskripsi = $matkul['deskripsi'];

		$matkul1 = new MataKuliah;
		$matkul1->kodemk = $kodemk;
		$matkul1->nama = $nama;
		$matkul1->singkatan_1 = $singkatan_1;
		$matkul1->singkatan_2 = $singkatan_2;
		$matkul1->sks = $sks;
		$matkul1->prodi = $prodi;
		$matkul1->jenis = $jenis;
		$matkul1->semester = $semester;
		$matkul1->deskripsi = $deskripsi;
		$matkul1->save();
		$this->app->flash('notif', 'Berhasil menambah mata kuliah '.$nama);

		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 200);
	}
	
	function updateMataKuliah($id) {
		$matkul = $this->app->request->post();

		$kodemk = $matkul['kodemk'];
		$nama = $matkul['nama'];
		$singkatan_1 = $matkul['singkatan_1'];
		$singkatan_2 = $matkul['singkatan_2'];
		$prodi = $matkul['prodi'];
		$jenis = $matkul['jenis'];
		$sks = $matkul['sks'];
		$semester = $matkul['semester'];
		$deskripsi = $matkul['deskripsi'];

		$matkul1 = MataKuliah::find($id);
		$matkul1->kodemk = $kodemk;
		$matkul1->nama = $nama;
		$matkul1->singkatan_1 = $singkatan_1;
		$matkul1->singkatan_2 = $singkatan_2;
		$matkul1->sks = $sks;
		$matkul1->prodi = $prodi;
		$matkul1->jenis = $jenis;
		$matkul1->semester = $semester;
		$matkul1->deskripsi = $deskripsi;
		$matkul1->save();
		$this->app->flash('notif', 'Berhasil mengubah mata kuliah '.$nama);
		
		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 200);
	}
	
	function deleteMataKuliah($id) {
		$matakuliah = MataKuliah::find($id);
		$this->app->flash('notif', 'Berhasil menghapus mata kuliah '.$matakuliah->nama);
		$matakuliah->delete();

		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 200);
	}
}