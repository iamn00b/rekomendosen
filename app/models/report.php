<?php

class Report extends Model {
	
	protected $table 		= 'report';
	protected $primaryKey 	= 'id';
	
	public function reviews() {
		return $this->belongsTo('Review');
	}

}