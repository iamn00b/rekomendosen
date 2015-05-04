<?php

class Dosen extends Model {
	
	protected $table 		= 'dosen';
	protected $primaryKey 	= 'id';

	const LAKI = 'Laki-Laki';
	const PEREMPUAN = 'Perempuan';
	
	public function matakuliahs() {
		return $this->belongsToMany('MataKuliah', 'mengajar', 'dosen_nip', 'mk_kodemk');
	}
	
	public function reviews() {
		return $this->hasMany('Review');
	}

	public function reviewBaiks() {
		return $this->reviews()->where('jenis', "=", Review::BAIK);
	}

	public function reviewBuruks() {
		return $this->reviews()->where('jenis', "=", Review::BURUK);
	}

	public function jumlahRating() {

		$listReviewBaik = $this->reviewBaiks();
		$listReviewBuruk = $this->reviewBuruks();

		$totalReview = $listReviewBaik->count() + $listReviewBuruk->count();
		if ($totalReview == 0)
			return 0;

		$totalPoinBaik = 0;
		foreach ($listReviewBaik->get() as $reviewBaik) 
			$totalPoinBaik += 1 + $reviewBaik->jumlahUpvote() - $reviewBaik->jumlahDownvote();

		$totalPoinBuruk = 0;
		foreach ($listReviewBuruk->get() as $reviewBuruk) 
			$totalPoinBuruk += 1 + $reviewBuruk->jumlahUpvote() - $reviewBuruk->jumlahDownvote();

		$totalPoin = $totalPoinBaik - $totalPoinBuruk;
		$rating = $totalPoin / (($totalPoinBaik + $totalPoinBuruk) * 1.0);

		return (integer) (($rating + 1) * 500) / 100;
		
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