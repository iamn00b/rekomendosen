<?php

class Notifikasi extends Model {
	protected $table 		= 'notifikasi';
	protected $primaryKey 	= 'id';
	
	public function penggunas() {
		return $this->belongsTo('Pengguna');
	}
}