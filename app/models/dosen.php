<?php

class Dosen extends Model {

	const LAKI_LAKI = 'L';
	const PEREMPUAN = 'P';
	const FOTO_URL = BASE_URL . '/images/dosen/';
	
	protected $table = 'dosen';
	
	public function matakuliah() {
		return $this->belongsToMany('MataKuliah', 'mengajar', 'dosen_id', 'matakuliah_id');
	}
	
	public function review() {
		return $this->hasMany('Review');
	}

	public function getFoto() {
		return self::FOTO_URL . $this->foto;
	}

	public function jenisKelaminAsString() {
		return ($this->jeniskelamin == self::LAKI_LAKI) ? "Pria" : "Wanita";
	}

	public function jumlahRating() {

		// TODO
		return 6;
		
	}

	public function jumlahRatingAsString() {

		// TODO
		return "6";

	}

}