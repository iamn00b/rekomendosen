<?php

class Pengguna extends Model {

	const ADMINISTRATOR = 'administrator';
	const MAHASISWA		= 'mahasiswa';
	const DOSEN			= 'dosen';
	
	protected $table 		= 'pengguna';
	protected $fillable 	= ['nama', 'npm'];
	protected $primaryKey 	= 'npm';
	
	function setAdmin() {
		$this->role = self::ADMINISTRATOR;
	}

	function setAktif() {
		$this->role = self::MAHASISWA;
	}

	function setPasif() {
		$this->role = self::DOSEN;
	}

	function setRole($role) {
		if ($role == self::MAHASISWA)
			$this->role = self::MAHASISWA;
		else
			$this->role = self::DOSEN;
	}

	function isAdmin() {
		return ($this->role == self::ADMINISTRATOR);
	}

	function isAktif() {
		return 
			($this->role == self::ADMINISTRATOR || 
			 $this->role == self::MAHASISWA);
	}

	function isBanned() {
		return (time() - $this->banned_hingga < 0);
	}

}