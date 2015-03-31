<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class UpvoteDownvoteMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('upvotedownvote');
        Capsule::schema()->create('upvotedownvote', function($table) {
            $table->increments('id');
            $table->integer('tipe');
			$table->integer('review_id');
            $table->timestamps();
        });
    }
}
