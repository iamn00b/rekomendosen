<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class DosenMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('dosen');
        Capsule::schema()->create('dosen', function($table) {
            $table->string('nip');
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->date('ttl');
            $table->timestamps();

            $table->primary('nip');
        });
    }
}
