<?php

class MataKuliah extends Model {
	
	protected $table 		= 'matakuliah';

	const UNIVERSITAS = 'universitas';
	const RUMPUN = 'rumpun';
	const FAKULTAS = 'fakultas';
	const JURUSAN = 'jurusan';
	const PEMINATAN = 'peminatan';

	const ILMU_KOMPUTER = 'ilkom';
	const SISTEM_INFORMASI = 'si';
	
	public function dosen() {
		return $this->belongsToMany('Dosen', 'mengajar', 'matakuliah_id', 'dosen_id');
	}

	public function prasyarat() {
		return $this->belongsToMany('MataKuliah', 'prasyarat', 'matakuliah_id', 'matakuliah_prasyarat_id');
	}

	public function menjadiPrasyarat() {
		return $this->belongsToMany('MataKuliah', 'prasyarat', 'matakuliah_prasyarat_id', 'matakuliah_id');
	}

	public function prodiAsString() {
		switch ($this->prodi) {
			case self::ILMU_KOMPUTER: return 'ilmu komputer';
			case self::SISTEM_INFORMASI: return 'sistem informasi';
			
			default: return $this->prodi;
		}
	}

}