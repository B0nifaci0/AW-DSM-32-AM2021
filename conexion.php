<?php

$server_name = 'localhost';
$user = 'root';
$password = 'root';
$database = 'AWS32';
$db_port = 8889;


$mysqli = new mysqli(
    $server_name,
    $user,
    $password,
    $database
  );
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

 /*  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  $mysqli->close() */
  ?>