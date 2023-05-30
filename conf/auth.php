<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $koneksi->prepare("SELECT * FROM tb_user WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    header("location:../app");
} 
else if ($username =='' || $password ==''){
header("location:../index.php?error=2");
} 

else {
    header("location:../index.php?error=1");
}

$stmt->close();
$koneksi->close();
?>
