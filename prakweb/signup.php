<?php
session_start(); 
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username sudah digunakan
    $query_check = "SELECT * FROM users WHERE username = '$username'";
    $result_check = mysqli_query($conn, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        echo '<script>alert("Username sudah digunakan. Silakan pilih username lain."); window.location.href = "index.php";</script>';
        exit();
    } else {
        // Simpan user baru
        $query_signup = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
        $result_signup = mysqli_query($conn, $query_signup);

        if ($result_signup) {
            echo '<script>
                alert("Pendaftaran berhasil! Silakan login.");
                window.location.href = "index.php";
            </script>';
            exit();
        } else {
            echo '<script>alert("Pendaftaran gagal. Silakan coba lagi."); window.location.href = "index.php";</script>';
            exit();
        }
    }
}
?>
