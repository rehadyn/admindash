<?php
include 'config.php';
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $koneksi->prepare("SELECT nama, level FROM tb_user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($nama, $level);
        $stmt->fetch();
        $_SESSION['username'] = $nama;
        $_SESSION['level'] = $level;
        $stmt->close();
        $koneksi->close();
        header("location:../app");
        exit();
    } else {
        header("location:../index.php?error=1");
        exit();
    }
} else {
    header("location:../index.php?error=2");
    exit();
}
?>
