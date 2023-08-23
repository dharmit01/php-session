<?php include(__DIR__ . "/layout/header.php"); ?>

<link rel="stylesheet" href="./css/register.css">

<div class="container d-flex flex-column vh-100 justify-content-center align-items-center">
    <div class="row">
        <div class="card">
            <div class="card-header text-center bg-white py-3">
                <h3>Register</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control p-3" type="text" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control p-3" type="email" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control p-3" type="text" name="username" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control p-3" type="password" name="password" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Passout Year</label>
                        <input class="form-control p-3" type="number" name="year" id="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input class="form-control p-3" type="text" name="department" id="department" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input class="btn btn-outline-primary px-5 mt-4" type="submit" value="Register" name="register"
                            id="register" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>