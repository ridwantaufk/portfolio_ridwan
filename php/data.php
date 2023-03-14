<?php
include('connection.php');

try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mysql = "INSERT INTO messages (name, email, subject, message_content) VALUES ('$name', '$email', '$subject', '$message')";
    $conn->exec($mysql);
    // penampil data yg telah diinput
    echo $name . "<br />";
    echo $email . "<br />";
    echo $subject . "<br />";
    echo $message . "<br />";
    echo '<script>
        // alert("Pesan Anda Telah Tersimpan");
        setInterval(timeOut, 6000);
        function timeOut() {
            document.getElementById("results").innerHTML = "";
            document.getElementById("status").innerHTML = "";
        }
    </script>
    <h5 id="status" style="color: white" >Pengiriman Database Berhasil !</h5><br>';
} catch (PDOException $e) {
    echo '<br><h5 style="color: red" >*Periksa Kesalahan Data Formulir</h5>';
    // . $e->getMessage() . '</br>';
}

// header('refresh: 3; url=../index.html');
