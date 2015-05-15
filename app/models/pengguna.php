<?php

class Pengguna extends Model {

	const ADMINISTRATOR = 'administrator';
	const MAHASISWA		= 'mahasiswa';
	const DOSEN			= 'dosen';
	
	protected $table 		= 'pengguna';
	protected $fillable		= ['nomor'];
	
	// RELATION FUNC
	
	public function review() {
		return $this->hasMany('Review');
	}
	
	public function komentar() {
		return $this->hasMany('Komentar');
	}
	
	public function vote() {
		return $this->hasMany('Vote');
	}
	
	public function report() {
		return $this->hasMany('Report');
	}
	
	public function feedback() {
		return $this->hasMany('Feedback');
	}

	public function subscribe() {
		return $this->belongsToMany('Dosen', 'subscribe');
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
			$this->setAktif();
		else
			$this->setPasif();
	}

	function isAdministrator() {
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

	function isGivingVote($review_id) {
		try {
			return $this->vote()->where('review_id', '=', $review_id)->firstOrFail();
		} catch (Exception $e) {
			return false;
		}
	}

	function isGivingUpvote($review_id) {
		try {
			return $this->vote()->where('review_id', '=', $review_id)->firstOrFail()->isUpvote();
		} catch (Exception $e) {
			return false;
		}
	}

	function isGivingDownvote($review_id) {
		try {
			return $this->vote()->where('review_id', '=', $review_id)->firstOrFail()->isDownvote();
		} catch (Exception $e) {
			return false;
		}
	}

	function isSubscribe($dosen_id) {
		return ($this->subscribe()->where('dosen_id', '=', $dosen_id)->count() > 0);
	}

}