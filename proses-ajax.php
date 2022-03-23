<?php

// masukkan data ke dalam tabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irfan_karyawan";
        
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "INSERT INTO foodie (name, email, acara, tanggal, pesan)
    VALUES (
        '" . $_POST['name'] . "',
        '" . $_POST['email'] . "',
        '" . $_POST['pilihan'] . "',
        '" . $_POST['tanggal'] . "',
        '" . $_POST['pesan'] . "'
     )";
    
     if ($conn->query($sql) === TRUE) {
        echo "Berhasil Di Tambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


?>