<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class NotifikasiMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('notifikasi');
        Capsule::schema()->create('notifikasi', function($table) {
            $table->increments('id');
            $table->string('tipe');
			$table->string('pengguna_npm');
			$table->string('dosen_id');
			$table->string('review_id');
            $table->timestamps();
        });
    }
}
