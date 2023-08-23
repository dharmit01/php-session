<?php
include "../connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$department = $_POST['department'];
$address = $_POST['address'];
$phone = $_POST['contact'];
$is_approved = 0;

$sql = $conn->prepare("INSERT INTO student (name, email, username, password, department, address, phone, is_approved) VALUES (?,?,?,?,?,?,?,?)");
$sql->bindParam(1, $name);
$sql->bindParam(2, $email);
$sql->bindParam(3, $username);
$sql->bindParam(4, $password);
$sql->bindParam(5, $department);
$sql->bindParam(6, $address);
$sql->bindParam(7, $phone);
$sql->bindParam(8, $is_approved);

if ($sql->execute()) {
    echo "<script>alert('You have registered successfully')</script>";
    echo "<script>window.open('../login.php', '_self')</script>";
}
