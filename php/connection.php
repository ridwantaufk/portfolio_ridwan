<?php
// koneksi
$server = "localhost";
$username = "root";
$password = "";
$db = "portfolio_data";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    // atur error opsi PDO dalam pengecualian 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // jika berhasil
    // echo "<br>Koneksi Ke Server Berhasil<br>";
} catch (PDOException $e) {
    die("<br>Terjadi Kesahalan Server : " . $e->getMessage() . "<br>");
}
