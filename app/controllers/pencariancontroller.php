<?php

class PencarianController extends _MainController {

	const HALAMAN_HASIL_PENCARIAN = 'hasil-pencarian.html';


	function tampilHasilPencarian() {
		$query = $this->app->request->get()['query'];

		$dosen 		= Dosen::where('nama','LIKE', "%".$query."%")->get();
		$mataKuliah = MataKuliah::where('nama','LIKE', "%".$query."%")->get();

		$data = array();
		$data['query'] = $query;
		$data['daftarDosen'] = $dosen;
		$data['daftarMataKuliah'] = $mataKuliah;

		$this->render(self::HALAMAN_HASIL_PENCARIAN, $data);	//TODO : Handle Not Found (404)
	}
}