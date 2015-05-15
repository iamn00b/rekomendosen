<?php

class Review extends Model {
	
	protected $table 		= 'review';
	
	public function dosen() {
		return $this->belongsTo('Dosen');
	}
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
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

	public function jumlahUpvote() {
		return $this->vote()->where('tipe', '=', Vote::UP)->count();
	}

	public function jumlahDownvote() {
		return $this->vote()->where('tipe', '=', Vote::DOWN)->count();
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
}