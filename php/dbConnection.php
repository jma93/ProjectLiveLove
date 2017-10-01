<?php
/**
 * Created by IntelliJ IDEA.
 * User: kevin
 * Date: 4/11/2017
 * Time: 7:09 PM
 */
// original database connection
// $DB_USER = 'mylivelo_epicintentions';
// $DB_PASSWORD = '5nmkQRr3v3WqIerKsJqt';
// $DB_HOST = 'mylivelove.com';
// $DB_NAME = 'mylivelo_mylivelove';
// $dbc = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

//database to make the server run locally
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_HOST = 'localhost';
$DB_NAME = 'mylivelo_mylivelove';
$dbc = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
OR die('Could not connect to database' .  mysqli_connect_error())

?>