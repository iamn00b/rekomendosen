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
            $table->string('kodemk');
            $table->string('nama');
            $table->integer('sks');
            $table->string('prodi');
            $table->timestamps();

            $table->primary('kodemk');
        });
    }
}
