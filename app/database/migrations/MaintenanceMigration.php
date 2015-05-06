<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class MaintenanceMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('maintenance');
        Capsule::schema()->create('maintenance', function($table) {
            $table->increments('id');
            $table->integer('status');
            $table->timestamps();
        });
    }
}
