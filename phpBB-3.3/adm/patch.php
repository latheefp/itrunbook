<?php

if (php_sapi_name() != 'cli')
{
	echo 'This program must be run from the command line.' . PHP_EOL;
	exit(1);
}

// Read database configuration from environment variables
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');

if (!$dbHost || !$dbName || !$dbUser || !$dbPass) {
    die('Error: Missing database environment variables.');
}

try {
    // Create a new PDO instance and connect to the database
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8";
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    // Set error mode to exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define the SQL query
    $sql = "UPDATE `phpbb_users` SET `user_email` = 'latheefp@gmail.com' WHERE `phpbb_users`.`user_id` = 2";

    // Execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    //echo "User email updated successfully.";
} catch (PDOException $e) {
    // Catch and display any errors
    echo "Error: " . $e->getMessage();
}
