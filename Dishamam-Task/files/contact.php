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
<style>
    body {
        background-image: url('../assets/images/4.jpg');
        background-repeat: no-repeat;
        background-size: auto;


    }

</style>

<body>
    <nav class="navbar navbar-expand-lg bg-dark  shadow ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">JQuery Task</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Customer.php">Customer</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="project.php">Project</a>
          <a class="nav-link" href="counter.php">Counter</a>
                    <a class="nav-link" href="joindata.php">Join Data Table</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <div class="shadow p-4 rounded">
            <form method="post" id="contactform">
                <div class="responses"></div>
                <center>
                    <div class="">
                        <h3 class="my-3">Contact</h3>
                    </div>
                </center>
                <label for="company" class="form-label">Company</label>
                <select name="customer" id="customer" class="form-select">
                    <option value="Cus">Select Company</option>
                </select>
                <br>

                <label for="first name" class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first name">

                <label for="last name" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last name">

                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">

                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">

                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password">

                <label for="primary" class="form-label mt-3">primary contact</label>
                <input type="checkbox" class="form-input-control form-check-input mt-3 ms-2" id="checkval" name="primary_contact">


                <center> <input type="submit" name="submit" id="submit" class="btn btn-primary w-25 mt-3 ">
                </center>
            </form>
        </div>
    </div>
</body>

</html>