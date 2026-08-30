<?php

$conn = new mysqli("localhost", "root", "", "university");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>