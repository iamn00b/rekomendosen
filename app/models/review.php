<?php

class Review extends Model {
	
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

	public function jumlahReport() {
		return $this->reports()->count();
	}
}