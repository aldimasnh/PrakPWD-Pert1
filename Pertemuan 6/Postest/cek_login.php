<?php
session_start();
include "../koneksi.php";
$id_user = $_POST['id_user'];
$pass = md5($_POST['paswd']);
$level = $_POST['lvl'];
$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass' AND level='$level'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    $login = mysqli_query($con, $sql);
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
    if ($ketemu > 0) {
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        $_SESSION['namauser'] = $r['nama_lengkap'];
        $_SESSION['emailuser'] = $r['email'];
        $_SESSION['hpuser'] = $r['no_hp'];
        $_SESSION['lvluser'] = $r['level'];
        echo "USER BERHASIL LOGIN<br>";
        echo "id user = ", $_SESSION['iduser'], "<br>";
        echo "password = ", $_SESSION['passuser'], "<br>";
        echo "nama = ", $_SESSION['namauser'], "<br>";
        echo "email = ", $_SESSION['emailuser'], "<br>";
        echo "no hp = ", $_SESSION['hpuser'], "<br>";
        echo "level = ", $_SESSION['lvluser'], "<br>";
        echo "<a href=logout.php><b>LOGOUT</b></a></center>";
    } else {
        echo "<center>Login gagal! username / password / level tidak benar<br>";
        echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
    }
    mysqli_close($con);
} else {
    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
} ?>