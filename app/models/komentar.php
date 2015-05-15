<?php

class Komentar extends Model {
	
	protected $table 		= 'komentar';
	protected $primaryKey 	= 'id';
	
	public function review() {
		return $this->belongsTo('Review');
	}
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

}