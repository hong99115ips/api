<?php

/*
 * Connection
 *
**/
$conn[1] = new mysqli($database[1]['host'], $database[1]['user'], $database[1]['pass'], $database[1]['name']);

/*
 * Try Connect
 *
**/
if ($conn[1]->connect_error) die("Connection failed: " . $conn->connect_error);
