<?php

class Review extends Model {

	const BAIK = 'baik';
	const BURUK = 'buruk';
	
	protected $table 		= 'review';
	protected $primaryKey 	= 'id';
	
	public function dosen() {
		return $this->belongsTo('Dosen');
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
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

	public function jumlahUpvote() {
		return $this->upvotedownvotes()->where('tipe', '=', UpvoteDownvote::UPVOTE)->count();
	}

	public function jumlahDownvote() {
		return $this->upvotedownvotes()->where('tipe', '=', UpvoteDownvote::DOWNVOTE)->count();
	}

	public function jumlahVoteAsString() {
		$total = $this->jumlahUpvote() - $this->jumlahDownvote();

		if ($total >= 0) 
			return "+" . $total;

		return "" . $total;
	}

	public function jumlahReport() {
		return $this->reports()->count();
	}

	public function isBaik() {
		return $this->jenis == self::BAIK;
	}
}