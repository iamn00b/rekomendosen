<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class AchievementMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('achievement');
        Capsule::schema()->create('achievement', function($table) {
            $table->increments('id');
            
            $table->integer('target');
            $table->string('nama');
            $table->string('badge');

            $table->timestamps();
        });
    }
}
