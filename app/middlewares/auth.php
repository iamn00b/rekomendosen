<?php

use SSO\SSO;

class Auth {

	static function login() { 

		SSO::authenticate(); 

	}

	static function logout() {

		SSO::logout();

	}

	static function check()		{

		return SSO::check();

	}

	static function getPengguna() {

		self::login();

		$sso = SSO::getUser();
		$pengguna = Pengguna::firstOrCreate(['nomor' => ($sso->role == Pengguna::DOSEN) ? ($sso->nip) : ($sso->npm)]);

		$pengguna->nama = $sso->name;
		if (empty($pengguna->role))
			$pengguna->setRole($sso->role); 
		$pengguna->save();

		return $pengguna;

	}

	static function isAdministrator() {

		$pengguna = self::getPengguna();
		
		return $pengguna->isAdministrator();
	}

	static function isAktif() {

		$pengguna = self::getPengguna();
		
		return $pengguna->isAktif();
	}

	static function isLogin() {

		return Auth::check();
	}
}