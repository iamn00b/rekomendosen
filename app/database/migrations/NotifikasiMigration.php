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

            $table->string('id_log');
            $table->string('jenis');
            $table->string('keterangan');
            $table->string('pengguna_id');

            $table->timestamps();
        });
    }
}
