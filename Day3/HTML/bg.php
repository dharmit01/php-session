<?php

require_once "./connection.php";

echo '<pre>';
// print_r($_POST);

$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$phone = $_POST['phone'];
$pincode = $_POST['pincode'];
$branch = $_POST['branch'];

$sql = "INSERT INTO student (name, email, password, phone, address, branch) VALUES ('$email', '$email', '$password', '$phone', '$address', '$branch')";

try {
    $conn->exec($sql);
    echo "<script> alert('Registration Successfull!!'); </script>";
    echo "<script> window.open('./index.php', '_self'); </script>";
    // header("Location: ./index.php");
} catch (PDOException $e){
    echo "<script> alert('Something went wrong! - " . $e->getMessage() . "'); </script>";
    echo "<script> window.open('./index.php', '_self'); </script>";
}
