<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class SubscribeMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('subscribe');
        Capsule::schema()->create('subscribe', function($table) {
            $table->string('pengguna_id');
            $table->string('dosen_id');
            $table->timestamps();
        });
    }
}
