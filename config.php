<?php
 class config{
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
protected $DB_SERVER = 'localhost';
protected $DB_USERNAME = 'root';
protected $DB_PASSWORD = '';
protected $DB_NAME = 'assignment2';

/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'assignment2');*/
 
/* Attempt to connect to MySQL database */
/*$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}*/
 }
?>