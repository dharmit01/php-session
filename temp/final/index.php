<?php include(__DIR__ . "/layout/header.php") ?>
<?php include './connection.php'; ?>

<!-- Main Page -->
<div class="container d-flex flex-column vh-100 align-items-center justify-content-center">
    <div class="row">
        <div class="col text-center">
            <img src="VGEC.png" alt="vgec_logo" style="width: 20%">
        </div>
    </div>
    <div class="row vw-100 text-center mt-4">
        <h1>Welcome to VGEC</h1>
    </div>
    <div class="row vw-100 mt-4">
        <div class="col-auto mx-auto">
            <a href="./login.php" class="btn btn-outline-primary me-1">Login</a>
            <a href="./register.php" class="btn btn-outline-primary ms-1">Register</a>
        </div>

    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php") ?>