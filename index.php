<?php
 session_start();
 if (isset($_SESSION["Gagal"])) {
     if ($_SESSION["Gagal"] >= 3) {
         echo '<h3>Akun anda diblokir</h3>';
         exit();
     }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIM COBA</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">

    </head>
    <body>
        <form id="frm01" name="frm01" method="post" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <h1 ><font color=" #742ECC">Login</font></h1>
            </div>
            <div class="form-label-group">
                <input class="form-control" name="inEmail" type="email" id="inEmail" placeholder="Email Address">
                <label for="inEmail">Email Address</label>
            </div>
             <div class="form-label-group">
                 <input class="form-control" name="inPass" type="password" id="inPass" placeholder="Password">
                <label for="inPass">Password</label>
            </div>
            <div class="chexkbox mb-3">
                <label>
                    <input type="checkbox"><font color=" #742ECC">Remember Me..????</font>
                </label>
            </div>
            <button class="btn btn-lg btn-info btn-block" type="submit">Sign In !</button>
            <div>
                <?php
                if (isset($_SESSION["Gagal"])) {
                    $pesan = $_SESSION["Gagal"];
                    echo "<script>alert('Anda Sudah Gagal Sebanyak: '+$pesan)</script>";
                }
                ?>
            </div>
        </form>
    </body>
</html>
