<?php

class Achievement extends Model {

	protected $table = 'achievement';

	public function icons() {
		return $this->hasMany('Icon');
	}

}