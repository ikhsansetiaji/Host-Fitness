<?php
// Koneksi ke database
$host = 'localhost';
$dbname = 'qxaszxed_fitness';
$username = 'qxaszxed_admin';
$password = 'ichfitness.site';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
