<?php

use SSO\SSO;

class Auth extends Controller {

	static function login() 	{ SSO::authenticate(); }

	static function logout() 	{ SSO::logout(); }

	static function check()		{ SSO::check(); }

	static function getPengguna() {

		self::login();

		$sso = SSO::getUser();
		$pengguna = Pengguna::firstOrCreate(array('nama' => $sso->name, 'npm' => $sso->npm));

		$pengguna->nama = $sso->name;
		if (empty($pengguna->role))
			$pengguna->setRole($sso->role); 

		$pengguna->save();
		return $pengguna;

	}
}