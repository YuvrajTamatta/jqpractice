<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">JQuery Task</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Customer.php">Customer</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link" href="#">Project</a>
                    <a class="nav-link" href="#">Counter</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <form method="post" id="customerform">
            <center>
                <h3 class="my-3">Contact</h3>
            </center>
            <label for="company" class="form-label">Company</label>
            <select name="customer" id="customer" class="form-select">
                   <option value="Cus"></option>             
            </select>
            <br>

            <label for="first name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first name" id="first name">

            <label for="last name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last name" id="last name">

            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email">

            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">

            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="password">

            <label for="primary" class="form-label">primary contact</label>
            <input type="checkbox" class="form-input-control" checked>

            <center> <input type="submit" name="submit" id="submit" class="btn btn-primary w-25 mt-3">
            </center>
        </form>
    </div>
</body>

</html>