<?php
define("nameServer", "localhost");
define("database","revamping_site");
define("username", "root");
define("password","");

$mysqli = new mysqli(nameServer, username, password, database);

if ($mysqli -> connect_error){
    die( "Failed to connect to MySQL" . $mysqli -> connect_error);
}
?>