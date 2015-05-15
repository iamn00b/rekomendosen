<?php

class Vote extends Model {
	
	protected $table = 'vote';

	const UP = 'up';
	const DOWN = 'down';

	// public static function UPVOTE_FILTER() {
	// 	return function($vote) {
	// 		return $vote->isUpvote();
	// 	};
	// }

	// public static function DOWNVOTE_FILTER() {
	// 	return function($vote) {
	// 		return $vote->isDownvote();
	// 	};
	// }
	
	public function review() {
		return $this->belongsTo('Review');
	}
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

	public function isUpvote() {
		return $this->tipe == Vote::UP;
	}

	public function isDownvote() {
		return $this->tipe == Vote::DOWN;
	}

}