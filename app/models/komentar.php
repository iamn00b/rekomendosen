<?php

class Komentar extends Model {
	
	protected $table 		= 'komentar';
	protected $primaryKey 	= 'id';
	
	public function reviews() {
		return $this->belongsTo('Review');
	}

}