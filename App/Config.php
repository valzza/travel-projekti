<?php

namespace App;

/**
 * Application configuration
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_DRIVER = 'mysql';

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost'; //127.0.0.1

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'travel';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
}