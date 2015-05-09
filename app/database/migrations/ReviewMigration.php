<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class ReviewMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('review');
        Capsule::schema()->create('review', function($table) {
            $table->increments('id');
            $table->string('jenis');
            $table->string('isi');
			$table->string('dosen_id');
            $table->string('pengguna_npm');
			$table->string('gambar');
            $table->timestamps();
        });
    }
}
