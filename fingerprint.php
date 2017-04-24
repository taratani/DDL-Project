<?php

DEFINE ('DB_USER', '');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', '');
DEFINE ('DB_NAME', '');

// attempt connection to database
$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// check if connection was made
if(mysqli_connect_errno()){
	echo "<h4>Failed to connect to MYSQL: ".mysqli_connect_error();
}
else{
	echo "<h4>Successfully connected to MYSQL: </h4>";
}

$query = "select * from user;";
$resultset = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	echo $row[0];
	echo $row[1];
}

mysqli_close($connection);

?>