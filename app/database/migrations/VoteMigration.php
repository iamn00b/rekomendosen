<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class VoteMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('vote');
        Capsule::schema()->create('vote', function($table) {
            $table->increments('id');

            $table->enum('tipe', array('up', 'down'))->default('up');
			$table->integer('review_id');
            $table->string('pengguna_id');

            $table->timestamps();
        });
    }
}
