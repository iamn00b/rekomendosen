<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class RewardMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('reward');
        Capsule::schema()->create('reward', function($table) {
            $table->string('pengguna_nomor');
            $table->string('achievment_id');
            $table->timestamps();
        });
    }
}
