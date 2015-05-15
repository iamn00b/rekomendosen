<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class PrasyaratMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('prasyarat');
        Capsule::schema()->create('prasyarat', function($table) {
            $table->string('matakuliah_id');
            $table->string('matakuliah_prasyarat_id');
            $table->timestamps();
        });
    }
}
