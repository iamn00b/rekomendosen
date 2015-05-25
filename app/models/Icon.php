<?php

class Icon extends Model {

	const FILE_URL = "/images/icon/";
	const AVAILABLE_COLOR = array('green' 	=> 'green',
								  'red' 	=> 'red', 
								  'yellow' 	=> 'yellow', 
								  'blue' 	=> 'blue');

	protected $table = 'icon';

	public function achievement() {
		return $this->belongsTo('Achievement');
	}

	public function getIcon() {
		return BASE_URL . self::FILE_URL . $this->filename;
	}

}