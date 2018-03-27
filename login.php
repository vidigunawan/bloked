<?php
session_start();
$user = $_POST["inEmail"];
$pass = $_POST["inPass"];
//=======================
$dbuser = "vidigunawan1717@gmail.com";
$dbpass = "vidi1234";
//=======================
if ($user == $dbuser && $pass == $dbpass){
    if (isset($_SESSION["masuk"])) {
        $_SESSION["masuk"]+ 1;
        header("location:login.php");
    }
    echo "<script>alert('Login Berhasil')</script>";
    echo "<h3>Sukses Login</h3>";
    } else {
        if (isset($_SESSION["Gagal"])) {
            $_SESSION["Gagal"] ++;
        } else {
            $_SESSION["Gagal"] = 1;
        }
        header("location:index.php");
}
