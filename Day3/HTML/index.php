<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registraion Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form class="row g-3" action="./bg.php" method="GET">
            <h3>Student Registration</h3>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Your email here" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Your password here" required>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <textarea name="address" type="text" class="form-control" id="inputAddress" placeholder="Your address here" required></textarea>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Pincode</label>
                <input name="pincode" type="number" class="form-control" id="inputZip" placeholder="Your pincode here" required>
            </div>      
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Phone</label>
                <input name="phone" type="number" class="form-control" id="inputPhone" min="6000000000" max="9999999999" placeholder="Your phone here" required>
            </div>
            <div class="col-md-6">
                <label for="inputBranch" class="form-label">Branch</label>
                <select name="branch" id="inputBranch" class="form-select">
                    <option selected>Choose your branch...</option>
                    <option value="CE">CE</option>
                    <option value="IT">IT</option>
                    <option value="ICT">ICT</option>
                </select>
            </div>
            <div class="col-12">
                <input name="submit" type="submit" class="btn btn-primary w-100" value="Register Now!">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./main.js"></script>

</body>

</html>