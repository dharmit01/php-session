<?php include(__DIR__ . "/layout/header.php"); ?>

<link rel="stylesheet" href="./css/login.css">

<div class="container d-flex flex-column vh-100 justify-content-center align-items-center">
    <div class="row">
        <div class="card">
            <div class="card-header text-center bg-white py-3">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <form action="./backend_2/login.php" method="post">
                    <div class="mb-4">
                        <label for="username" class="form-label">Email</label>
                        <input class="form-control p-3" type="text" name="email" id="username" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control p-3" type="password" name="password" id="password" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input class="btn btn-outline-primary px-5 mt-4" type="submit" value="Login" name="login" id="login" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/layout/footer.php"); ?>