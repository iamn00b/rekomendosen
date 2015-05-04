<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class MataKuliahMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('matakuliah');
        Capsule::schema()->create('matakuliah', function($table) {
            $table->increments('id');
			$table->string('kodemk');
            $table->string('nama');
            $table->integer('sks');
            $table->integer('semester');
            $table->string('prodi');
			$table->string('jenis');
			$table->string('singkatan_1');
			$table->string('singkatan_2');
			$table->string('deskripsi');
            $table->timestamps();
        });
    }
}
