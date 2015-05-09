<?php

class Achievment extends Model {
	protected $table 		= 'achievment';
	protected $primaryKey 	= 'id';
	
	public function penggunas() {
		return $this->belongsToMany('Pengguna', 'reward', 'achievment_id', 'pengguna_nomor');
	}
}