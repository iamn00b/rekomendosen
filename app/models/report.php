<?php

class Report extends Model {
	
	protected $table 		= 'report';
	protected $primaryKey 	= 'id';
	
	public function review() {
		return $this->belongsTo('Review');
	}
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

}