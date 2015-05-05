<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class SubscribeUnsubscribeMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('subscribe');
        Capsule::schema()->create('subscribe', function($table) {
            $table->string('pengguna_nomor');
            $table->string('dosen_nip');
            $table->timestamps();
        });
    }
}
