<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class FeedbackMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('feedback');
        Capsule::schema()->create('feedback', function($table) {
            $table->increments('id');

            $table->string('rating');
            $table->string('isi');
			$table->string('pengguna_id');

            $table->timestamps();
        });
    }
}
