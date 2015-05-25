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
            $table->string('singkatan_1');
            $table->string('singkatan_2');
            $table->string('nama');
            $table->integer('sks')->default(3);
            
            $table->integer('semester')->default(1);
            $table->enum('jenis', array('universitas', 'rumpun', 'fakultas', 'jurusan', 'peminatan'))->default('fakultas');
            $table->enum('prodi', array('universitas', 'fakultas', 'ilkom', 'si'))->default('fakultas');
            $table->string('deskripsi')->default('Lorem ipsum dolor sit amet');

            $table->timestamps();
        });
    }
}
