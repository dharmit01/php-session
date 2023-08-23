<?php
session_start();
include "../connection.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = $conn->prepare("SELECT * FROM student WHERE email = ?");
$sql->bindParam(1, $email);
$sql->execute();

$data = $sql->fetch(PDO::FETCH_ASSOC);

if ($sql->rowCount() == 0) {
    echo "<script>alert('Wrong Credentials')</script>";
    echo "<script>window.open('../login.php', '_self')</script>";
}

if ($password != $data['password']) {
    echo "<script>alert('Wrong Credentials')</script>";
    echo "<script>window.open('../login.php', '_self')</script>";
} else if ($data['type'] == "student") {
    $_SESSION['student_id'] = $data['id'];
    echo "<script>window.open('../profile.php', '_self')</script>";
} else {
    $_SESSION['admin_id'] = $data['id'];
    echo "<script>window.open('../admin.php', '_self')</script>";
}
