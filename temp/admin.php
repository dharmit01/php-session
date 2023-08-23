<?php include(__DIR__ . "/layout/header.php"); ?>

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
                    <th>Passout Year</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dharmit</td>
                    <td>dharmit@gmail.com</td>
                    <td>Information Technology</td>
                    <td>2023</td>
                    <td>Not Approved</td>
                    <td>
                        <button class="btn btn-outline-primary">Approve</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>