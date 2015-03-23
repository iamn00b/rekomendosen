<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class PenggunaMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('pengguna');
        Capsule::schema()->create('pengguna', function($table) {
            $table->string('npm');
            $table->string('nama');
            $table->string('role');
            $table->date('banned_hingga');
            $table->timestamps();

            $table->primary('npm');
        });
    }
}
