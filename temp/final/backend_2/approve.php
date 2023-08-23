<?php
session_start();
include "../connection.php";

if (isset($_SESSION['admin_id'])) {
    $studentId = $_POST['student_id'];

    $query = $conn->prepare("UPDATE student SET is_approved = 1 WHERE id = ?");
    $query->bindParam(1, $studentId);

    if ($query->execute()) {
        echo json_encode(array("message" => "Success"));
    } else {
        echo json_encode(array("message" => "Failure"));
    }
}
