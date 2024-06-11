<?php
require "../vendor/autoload.php";
require "../Bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->id();
    $table->string('first_name', 30);
    $table->string('last_name', 30);
    $table->string('address')->nullable();
    $table->string('phone', 30)->nullable();
    $table->boolean('status')->default(1);
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});