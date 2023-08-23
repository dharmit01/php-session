<?php session_start(); ?>
<?php include(__DIR__ . "/layout/header.php"); ?>
<?php include './connection.php' ?>

<?php
if (isset($_SESSION['student_id'])) {
    $studentId = $_SESSION['student_id'];

    $query = $conn->prepare("SELECT * FROM student WHERE id = ?");
    $query->bindParam(1, $studentId);
    $query->execute();

    $data = $query->fetch(PDO::FETCH_ASSOC);
}

?>

<div class="container mt-4">

    <?php if ($data['is_approved'] == 1) { ?>
        <div class="row">
            <h1>Student Profile</h1>
        </div>
        <!-- If Approved -->
        <div class="row">
            <div class="col-md-3">
                <img src="VGEC.png" alt="" srcset="" style="width: 100%;">
            </div>
            <div class="col-md-9">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <h4><?php echo $data['name'] ?></h4>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>
                    <h4><?php echo $data['email'] ?></h4>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Contact</label>
                    <h4><?php echo $data['phone'] ?></h4>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Address</label>
                    <h4><?php echo $data['address'] ?></h4>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Department</label>
                    <h4><?php echo $data['department'] ?></h4>
                </div>
            </div>
        </div>

    <?php } else { ?>

        <!-- If Not Approved -->
        <div class="row">
            <h1>Your Profile is not approved</h1>
        </div>

    <?php } ?>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="./logout.php">Logout</a>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>