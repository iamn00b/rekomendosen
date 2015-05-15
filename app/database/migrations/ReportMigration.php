<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class ReportMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('report');
        Capsule::schema()->create('report', function($table) {
            $table->increments('id');

			$table->integer('review_id');
            $table->string('pengguna_id');

            $table->timestamps();
        });
    }
}
