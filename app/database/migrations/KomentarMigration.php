<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class KomentarMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('komentar');
        Capsule::schema()->create('komentar', function($table) {
            $table->increments('id');
            $table->string('isi');
			$table->integer('review_id');
            $table->string('pengguna_npm');
			$table->string('gambar');
            $table->timestamps();
        });
    }
}
