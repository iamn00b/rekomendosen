<?php

class ActivityLog extends Model {
	protected $table 		= 'activitylog';
	protected $primaryKey 	= 'id';
	
	public function penggunas() {
		return $this->belongsTo('Pengguna');
	}
}