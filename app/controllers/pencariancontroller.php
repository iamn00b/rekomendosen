<?php

class PencarianController extends _MainController {

	const HALAMAN_HASIL_PENCARIAN = 'pencarian.html';

	function tampilHasilPencarian() {
		$query = $this->app->request->get()['query'];

		$dosen 		= Dosen::where('nama','LIKE', "%".$query."%")->get();
		$mataKuliahNama = MataKuliah::where('nama','LIKE', "%".$query."%")->get();
		$mataKuliahSingkatanSatu = MataKuliah::where('singkatan_1','LIKE', "%".$query."%")->get();
		$mataKuliahSingkatanDua = MataKuliah::where('singkatan_2','LIKE', "%".$query."%")->get();

		$data = array();
		$data['query'] = $query;
		$data['daftarDosen'] = $dosen;
		$data['daftarMataKuliah'] = $mataKuliahNama->merge($mataKuliahSingkatanSatu)->merge($mataKuliahSingkatanDua);

		$this->render(self::HALAMAN_HASIL_PENCARIAN, $data);
	}
}