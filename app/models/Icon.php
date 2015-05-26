<?php

class Icon extends Model {

	const FILE_URL = "/images/icon/";

	protected $table = 'icon';

	public function achievement() {
		return $this->belongsTo('Achievement');
	}

	public function getIcon() {
		return BASE_URL . self::FILE_URL . $this->filename;
	}

}