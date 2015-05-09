<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class AchievmentMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('achievment');
        Capsule::schema()->create('achievment', function($table) {
            $table->increments('id');
			$table->string('nama');
            $table->string('tipe');
			$table->integer('target');
            $table->timestamps();
        });
    }
}
