<?php
require "../vendor/autoload.php";
require "../Bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('properties', function ($table) {
    $table->id();
    $table->integer('user_id');
    $table->string('title', 30);
    $table->string('description', 30);
    $table->string('location', 30);
    $table->string('price_per_night', 11);
    $table->timestamps();
});