<?php include(__DIR__ . "/layout/header.php"); ?>

<link rel="stylesheet" href="./css/register.css">

<div class="container d-flex flex-column vh-100 justify-content-center align-items-center">
    <div class="card">
        <div class="card-header text-center bg-white py-3">
            <h3>Register</h3>
        </div>
        <div class="card-body">
            <form action="./backend_2/register.php" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control p-3" type="text" name="name" id="name" required>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control p-3" type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control p-3" type="text" name="username" id="username" required>
                    </div>
                    <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control p-3" type="password" name="password" id="password" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="contact" class="form-label">Contact</label>
                        <input class="form-control p-3" type="text" name="contact" id="contact" required>
                    </div>
                    <div class="col">
                        <label for="department" class="form-label">Department</label>
                        <input class="form-control p-3" type="text" name="department" id="department" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="3" rows="3"></textarea>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <input class="btn btn-outline-primary px-5 mt-4" type="submit" value="Register" name="register" id="register" required>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>