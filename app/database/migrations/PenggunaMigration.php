<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class PenggunaMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('pengguna');
        Capsule::schema()->create('pengguna', function($table) {
            $table->increments('id');

            $table->string('nomor');
            $table->string('nama');
            $table->enum('role', array('dosen', 'mahasiswa', 'administrator'))->default('dosen');
            $table->date('banned_hingga');

            $table->timestamps();
        });
    }
}