<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
</head>
<style>
    body {
        background-image: url('../assets/images/4.jpg');
        background-repeat: no-repeat;
        background-size: auto;

    }
</style>
<!-- background="../assets/images/black.jpeg" style="background-repeat: no-repeat; height:100%; width:100% " -->

<body>
    <nav class="navbar navbar-expand-lg  shadow bg-dark">
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
        <div class="shadow p-3 border rounded">
            <form method="post" class="d-flex flex-column gap-2 needs-validation" novalidate id="customerform">
                <center>
                    <h3 class="my-3">Customer Registration</h3>
                </center>
                <div class="response"></div>
                <label for="company" class="form-label">Company</label>
                <input type="text" class="form-control" name="companys" id="company" required oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'')">
                <div class="mes invalid-feedback ">
                    <p>Company name is required</p>
                </div>

                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" id="phone" required>
                <div class="mes invalid-feedback ">
                    <p>Phone no. is required</p>
                </div>

                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="city" required>
                <div class="mes invalid-feedback ">
                    <p>City is required</p>
                </div>

                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" name="state" id="state" required>
                <div class="mes invalid-feedback ">
                    <p>State is required</p>
                </div>

                <center> <input type="submit" name="submit" id="submit" class="btn btn-primary w-25 mt-3">
                </center>
            </form>
        </div>

        <!-- Data Records -->

    </div>
    <script>

    </script>
</body>

</html>