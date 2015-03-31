<?php

class Review extends Model {
	
	protected $table 		= 'review';
	protected $primaryKey 	= 'id';
	
	public function dosens() {
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
}