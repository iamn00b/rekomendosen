<?php

class UpvoteDownvote extends Model {
	
	protected $table 		= 'upvotedownvote';
	protected $primaryKey 	= 'id';
	
	public function reviews() {
		return $this->belongsTo('Review');
	}
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

}