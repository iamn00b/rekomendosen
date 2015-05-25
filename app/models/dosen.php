<?php

class Dosen extends Model {

	const LAKI_LAKI = 'L';
	const PEREMPUAN = 'P';
	const FOTO_URL = "/images/dosen/";
	
	protected $table = 'dosen';
	
	public function matakuliah() {
		return $this->belongsToMany('MataKuliah', 'mengajar', 'dosen_id', 'matakuliah_id');
	}
	
	public function review() {
		return $this->hasMany('Review');
	}

	public function subscriber() {
		return $this->belongsToMany('Pengguna', 'subscribe');
	}

	public function getFoto() {
		return BASE_URL . self::FOTO_URL . $this->foto;
	}

	public function jenisKelaminAsString() {
		return ($this->jeniskelamin == self::LAKI_LAKI) ? "Pria" : "Wanita";
	}

	public function jumlahRating() {

		$daftarReview = $this->review()->get();

		$reviewEligable = 0;
		$totalPoints = 0;
		foreach ($daftarReview as $review) {
			if ($review->jumlahVote() >= 0) {
				$reviewEligable += $review->jumlahVote() + 1;
				$totalPoints += $review->rating * ($review->jumlahVote() + 1);
			}
		}

		if ($reviewEligable <= 0)
			return 0;

		$totalRating = $totalPoints / ($reviewEligable * Review::MAX_INPUT_RATING);
		return $totalRating * 10;
		
	}

	public function jumlahRatingAsString() {

		$rating = $this->jumlahRating();

		$depan = (integer) $rating;
		$belakang = abs((integer) ($rating * 100) - ($depan * 100));

		$ratingArray = array();
		$ratingArray['depan'] = $depan;
		$ratingArray['belakang'] = $belakang;

		return $ratingArray;
	}

}