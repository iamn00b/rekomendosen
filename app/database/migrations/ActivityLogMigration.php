<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class ActivityLogMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('activitylog');
        Capsule::schema()->create('activitylog', function($table) {
            $table->increments('id');
            $table->string('activity');
			$table->string('pengguna_npm');
			$table->string('dosen_id');
            $table->timestamps();
        });
    }
}
