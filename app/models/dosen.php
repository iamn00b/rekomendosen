<?php

class Dosen extends Model {
	
	protected $table 		= 'dosen';
	
	public function matakuliahs() {
		return $this->belongsToMany('MataKuliah', 'mengajar', 'dosen_nip', 'mk_kodemk');
	}
	
	public function reviews() {
		return $this->hasMany('Review');
	}

}