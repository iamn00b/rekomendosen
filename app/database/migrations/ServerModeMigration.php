<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class ServerModeMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('servermode');
        Capsule::schema()->create('servermode', function($table) {
            $table->increments('id');

            $table->string('desc');
            $table->enum('status', array('Y', 'N'))->default('N');

            $table->timestamps();
        });
    }
}
