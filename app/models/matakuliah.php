<?php

class MataKuliah extends Model {
	
	protected $table 		= 'matakuliah';
	protected $primaryKey 	= 'id';
	
	public function dosens() {
		return $this->belongsToMany('Dosen', 'mengajar', 'mk_kodemk', 'dosen_nip');
	}

}