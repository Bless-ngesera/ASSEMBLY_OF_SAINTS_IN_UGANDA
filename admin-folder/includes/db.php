<?php
$conn = new mysqli('localhost', 'root', 'mysql061004!', 'assembly_of_saints');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>