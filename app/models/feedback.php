<?php

class Feedback extends Model {
	
	protected $table 		= 'feedback';
	protected $primaryKey 	= 'id';
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}
}