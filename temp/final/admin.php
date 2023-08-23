<?php session_start() ?>
<?php include(__DIR__ . "/layout/header.php"); ?>
<?php include "./connection.php" ?>

<?php
if (!isset($_SESSION['admin_id'])) {
    echo "<script>window.open('./login.php', '_self')</script>";
}
?>

<!-- Get All Registered Students -->
<?php
$query = $conn->prepare("SELECT * FROM student WHERE type='student'");
$query->execute();
$students = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- Admin Layout -->
<div class="container mt-4">
    <div class="row">
        <h2>All Students</h2>
    </div>
    <div class="row mt-3">
        <table class="table table-hover table-bordered text-center align-middle">
            <thead class="text-center">
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $srNo = 1;
                foreach ($students as $student) {
                ?>
                    <tr>
                        <td><?php echo $srNo; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['department']; ?></td>
                        <td><?php echo $student['phone']; ?></td>
                        <td><?php echo ($student['is_approved'] == 1) ? 'Approved' : 'Not Approved'; ?></td>
                        <td>
                            <?php
                            if ($student['is_approved'] == 0) {
                            ?>
                                <button class="btn btn-outline-primary approve" id="<?php echo $student['id'] ?>">Approve</button>
                            <?php } ?>
                        </td>
                    </tr>
                <?php
                    $srNo++;
                };
                ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col">
            <a href="./logout.php" class="btn btn-outline-primary">Logout</a>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>

<script>
    $(document).ready(function() {
        $(".approve").on('click', function() {
            let studentId = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: "backend_2/approve.php",
                data: {
                    student_id: studentId
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    alert('Student Approved Successfully')
                    window.location.reload();
                }
            });
        })
    });
</script>