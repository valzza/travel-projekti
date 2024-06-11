<?php
require "../vendor/autoload.php";
require "../Bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('bookings', function ($table) {
    $table->id();
    $table->integer('user_id');
    $table->string('where_to', 30);
    $table->string('how_many', 30);
    $table->datetime('check_in');
    $table->datetime('check_out');
    $table->string('details', 250);
    $table->timestamps();
});