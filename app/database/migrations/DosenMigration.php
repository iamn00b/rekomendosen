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
            $table->increments('id');

            $table->string('nip');
            $table->string('nama');
            $table->enum('jeniskelamin', array('L', 'P'))->default('L');
            $table->string('foto')->default('placeholder.gif');
            $table->string('pendidikan')->default('S1');

            $table->timestamps();

        });
    }
}
