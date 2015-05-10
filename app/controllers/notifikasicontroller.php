<?php

class NotifikasiController extends _MainController {
	
	function readNotifikasi() {
		$pengguna = Auth::getPengguna();
		foreach (Pengguna::all()->notifikasis()->get() as $notif) {
			$notif->read = 1;
			$notif->save();
		}
	}
}