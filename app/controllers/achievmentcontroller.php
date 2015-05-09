<?php

class AchievmentController extends _MainController {

	const HALAMAN_DAFTAR_ACHIEVMENT = 'achievments.html';
	
	function tampilAchievment($nomor) {
		$achievment = Achievment::all();
		$data = array();
		$data['daftarAchievment'] = $achievment;
		$this->render(self::HALAMAN_DAFTAR_ACHIEVMENT,$data);
	}
}