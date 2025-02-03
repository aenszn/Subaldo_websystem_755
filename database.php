<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "samplelogin";

// create connection
$com = new mysqli($servername, $username, $password, $database);



//check connection
if($coon -> connect_error){
    die("Connection failed" . $coon -> connect_error);
}

?>