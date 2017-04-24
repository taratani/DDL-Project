<?php

DEFINE ('DB_USER', '');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', '');
DEFINE ('DB_NAME', '');

// attempt connection to database
$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$name = $_REQUEST['name'];

$query = "insert into (name) values ('$name')";

$resultset = mysqli_query($connection, $query);

mysqli_close($connection);

?>