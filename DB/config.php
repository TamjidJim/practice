<?php 
$host="localhost"; // database server
$user="root"; // database user
$pass=""; // database password
$dbname="summer 25-26";  // database name

$conn= new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error)
    {
        die("Connec=tion Failed: ". $conn->connect_error);
    }

?>