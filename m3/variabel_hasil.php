<?php
$username = $_POST['nama'];
$email = $_POST['email'];

if ($username == "" && $email == "")
 {
    header("location: login.php");
}
else
{
    echo "login berhasil";
}
?>