<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class IconMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('icon');
        Capsule::schema()->create('icon', function($table) {
            $table->increments('id');
            
            $table->string('filename');
            $table->string('achievement_id');

            $table->timestamps();
        });
    }
}
