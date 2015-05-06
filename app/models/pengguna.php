<?php

class Pengguna extends Model {

	const ADMINISTRATOR = 'administrator';
	const MAHASISWA		= 'mahasiswa';
	const DOSEN			= 'dosen';
	
	protected $table 		= 'pengguna';
	protected $fillable 	= ['nama', 'npm'];
	protected $primaryKey 	= 'npm';
	
	// RELATION FUNC
	
	public function activitylogs() {
		return $this->hasMany('ActivityLog', 'pengguna_npm');
	}
	
	public function notifikasis() {
		return $this->hasMany('Notifikasi', 'pengguna_npm');
	}
	
	public function reviews() {
		return $this->hasMany('Review', 'pengguna_npm');
	}
	
	public function komentars() {
		return $this->hasMany('Komentar');
	}
	
	public function upvotedownvotes() {
		return $this->hasMany('UpvoteDownvote');
	}
	
	public function reports() {
		return $this->hasMany('Report');
	}
	
	public function dosens() {
		return $this->belongsToMany('Dosen', 'subscribe', 'pengguna_nomor', 'dosen_nip');
	}

	// MODEL FUNC
	
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
	
	public function feedbacks() {
		return $this->hasMany('Feedback');
	}

	function jumlahReviewBaik() {
		return $this->reviews()->where('jenis', '=', Review::BAIK)->count();
	}

	function jumlahReviewBuruk() {
		return $this->reviews()->where('jenis', '=', Review::BURUK)->count();
	}

}