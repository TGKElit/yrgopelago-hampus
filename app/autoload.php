<?php

declare(strict_types=1);

// Start the session engines.
session_start();

// Set the default timezone to Coordinated Universal Time.
date_default_timezone_set('UTC');

// Set the default character encoding to UTF-8.
mb_internal_encoding('UTF-8');

// Fetch the global configuration array.
$config = require __DIR__ . '/config.php';

// Setup the database connection.
$database = new PDO($config['database_path']);
$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Include the helper functions.
require __DIR__ . '/functions.php';
