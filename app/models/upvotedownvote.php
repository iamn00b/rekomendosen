<?php

class UpvoteDownvote extends Model {
	
	protected $table 		= 'upvotedownvote';
	protected $primaryKey 	= 'id';
	
	public function reviews() {
		return $this->belongsTo('Review');
	}
	
	public function penggunas() {
		return $this->belongsTo('Pengguna');
	}

}