<?php

class Feedback extends Model {
	
	protected $table 		= 'feedback';
	protected $primaryKey 	= 'id';
	
	public function penggunas() {
		return $this->belongsTo('Penggguna');
	}
}