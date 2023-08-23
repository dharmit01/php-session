<?php include(__DIR__ . "/layout/header.php"); ?>

<div class="container mt-4">
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
                <h4>Dharmit</h4>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <h4>dharmit@gmail.com</h4>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Contact</label>
                <h4>9876543210</h4>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Address</label>
                <h4>Ahmedabad</h4>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Department</label>
                <h4>IT</h4>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Passout Year</label>
                <h4>2023</h4>
            </div>
        </div>
    </div>

    <!-- If Not Approved -->
    <div class="row">
        <h1>Your Profile is not approved</h1>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>